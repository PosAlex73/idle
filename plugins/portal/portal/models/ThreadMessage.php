<?php namespace Portal\Portal\Models;

use Model;

/**
 * ThreadMessage Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class ThreadMessage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_portal_thread_messages';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
