<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\CommonStatuses;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateAppNewsTable Migration
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
        Schema::create('portal_portal_app_news', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text')->nullable();
            $table->string('status', 1)->default(CommonStatuses::DISABLE);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_app_news');
    }
};
