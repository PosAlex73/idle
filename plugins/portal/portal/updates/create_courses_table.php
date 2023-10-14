<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\CourseStatuses;
use Portal\Portal\enums\CourseTypes;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCoursesTable Migration
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
        Schema::create('portal_portal_courses', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('portal_portal_categories');
            $table->string('status', 1)->default(CourseStatuses::IN_DEVELOPMENT);
            $table->string('type', 1)->default(CourseTypes::FREE);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_courses');
    }
};
