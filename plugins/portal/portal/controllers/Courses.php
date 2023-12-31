<?php namespace Portal\Portal\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Courses Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Courses extends Controller
{
    public $implement = [
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\FormController::class
    ];

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    public $formConfig = 'config_form.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['portal.portal.courses'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Portal.Portal', 'portal', 'courses');
    }
}
