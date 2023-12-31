<?php namespace Portal\Portal\Models;

use Model;

/**
 * CourseSettings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class CourseSettings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_course_settings';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    protected $fillable = [
        'course_id',
        'data'
    ];

    public $belongsTo = [
        'course' => Course::class
    ];
}
