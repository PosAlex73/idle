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
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

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
