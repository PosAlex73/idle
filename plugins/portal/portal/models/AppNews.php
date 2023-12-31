<?php namespace Portal\Portal\Models;

use Model;

/**
 * AppNews Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class AppNews extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_app_news';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    protected $fillable = [
        'title',
        'text',
        'status'
    ];
}
