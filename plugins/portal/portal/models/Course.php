<?php namespace Portal\Portal\Models;

use Model;

/**
 * Course Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_courses';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
