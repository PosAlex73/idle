<?php namespace Portal\Portal\Models;

use Model;

/**
 * Page Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Page extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_pages';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    protected $fillable = [
        'title',
        'text',
        'status',
        'url'
    ];
}
