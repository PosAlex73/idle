<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\TaskStatuses;
use Portal\Portal\enums\TaskTypes;
use Portal\Portal\Updates\Seeders\CommonSeeder;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateTasksTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('portal_portal_tasks', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('status', 1)->default(TaskStatuses::ACTIVE);
            $table->string('type', 1)->default(TaskTypes::THEORY);
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('portal_portal_courses');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_tasks');
    }
};
