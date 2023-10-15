<?php namespace Portal\Portal\Models;

use Model;

/**
 * UserNotification Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class UserNotification extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_user_notifications';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
