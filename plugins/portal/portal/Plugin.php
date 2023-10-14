<?php namespace Portal\Portal;

use Backend;
use Portal\Portal\Components\Courses;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Portal Courses',
            'description' => 'Courses for programming learning',
            'author' => 'A. Posnov',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Courses::class
        ];

    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'portal.portal.some_permission' => [
                'tab' => 'Portal',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'portal' => [
                'label' => 'Portal',
                'url' => Backend::url('portal/portal/courses/index'),
                'icon' => 'icon-leaf',
                'permissions' => ['portal.portal.*'],
                'order' => 500,
            ],
        ];
    }
}
