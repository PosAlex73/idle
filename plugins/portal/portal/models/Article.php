<?php namespace Portal\Portal\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Model;

/**
 * Article Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_articles';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
