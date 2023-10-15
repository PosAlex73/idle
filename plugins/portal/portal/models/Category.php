<?php namespace Portal\Portal\Models;

use Model;
use October\Rain\Database\Factories\HasFactory;

/**
 * Category Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use HasFactory;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_categories';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
