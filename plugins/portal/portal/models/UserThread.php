<?php namespace Portal\Portal\Models;

use Model;
use RainLab\User\Models\User;

/**
 * UserThread Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class UserThread extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_user_threads';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $fillable = [
        'user_id'
    ];

    public $belongsTo = [
        'user' => User::class
    ];

    public $hasMany = [
        'userMessages' => ThreadMessage::class
    ];
}
