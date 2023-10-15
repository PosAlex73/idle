<?php namespace Portal\Portal\Models;

use Model;

/**
 * AdminNotification Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class AdminNotification extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_admin_notifications';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
