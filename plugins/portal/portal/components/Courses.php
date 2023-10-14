<?php namespace Portal\Portal\Components;

use Cms\Classes\ComponentBase;

/**
 * Courses Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Courses extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Courses Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
