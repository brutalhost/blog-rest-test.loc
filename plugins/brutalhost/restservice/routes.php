<?php

use Illuminate\Support\Facades\Route;
use Winter\Blog\Models\Post;

Route::get('/rest/blog/{slug}', function (string $slug) {
    $post = Post::where('slug', $slug)->first();

    if (!$post) {
        return response()->json(['error' => 'Элемент не найден'], 404);
    }

    $featuredImages = $post->featured_images->isNotEmpty()
        ? $post->featured_images->map(function ($image) {
            return [
                'path'        => $image['path'],
                'title'       => $image['title'],
                'description' => $image['description'],
            ];
        })->toArray()
        : [];

    $fields = [
        'title'           => $post->title,
        'slug'            => $post->slug,
        'excerpt'         => empty($post->excerpt) ? $post->summary : $post->excerpt,
        'content'         => $post->content,
        'content_html'    => $post->content_html,
        'published_at'    => $post->published_at,
        'featured_images' => $featuredImages,
    ];

    return response()->json($fields);
})->where('slug', '[A-Za-z0-9\-\+\_\ ]+');
