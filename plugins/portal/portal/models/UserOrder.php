<?php namespace Portal\Portal\Models;

use Model;

/**
 * UserOrder Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class UserOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_user_orders';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
