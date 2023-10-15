<?php namespace Portal\Portal\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateUserNotificationsTable Migration
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
        Schema::create('portal_portal_user_notifications', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text');
            $table->string('class');
            $table->string('status');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_user_notifications');
    }
};
