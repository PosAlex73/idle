<?php namespace Portal\Portal\Models;

use Model;

/**
 * Payment Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Payment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_payments';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
