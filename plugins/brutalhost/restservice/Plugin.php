<?php

namespace Brutalhost\RestService;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * RestService Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'brutalhost.restservice::lang.plugin.name',
            'description' => 'brutalhost.restservice::lang.plugin.description',
            'author'      => 'Brutalhost',
            'icon'        => 'icon-exchange-alt'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
//    public function registerComponents(): array
//    {
//        return []; // Remove this line to activate
//
//        return [
//            'Brutalhost\RestService\Components\MyComponent' => 'myComponent',
//        ];
//    }

    /**
     * Registers any backend permissions used by this plugin.
     */
//    public function registerPermissions(): array
//    {
//        return []; // Remove this line to activate
//
//        return [
//            'brutalhost.restservice.some_permission' => [
//                'tab' => 'brutalhost.restservice::lang.plugin.name',
//                'label' => 'brutalhost.restservice::lang.permissions.some_permission',
//                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
//            ],
//        ];
//    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

//        return [
//            'restservice' => [
//                'label'       => 'brutalhost.restservice::lang.plugin.name',
//                'url'         => Backend::url('brutalhost/restservice/mycontroller'),
//                'icon'        => 'icon-exchange-alt',
//                'permissions' => ['brutalhost.restservice.*'],
//                'order'       => 500,
//            ],
//        ];
    }
}
