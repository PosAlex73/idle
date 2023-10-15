<?php namespace Portal\Portal\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateThreadMessagesTable Migration
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
        Schema::create('portal_portal_thread_messages', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('thread_id');
            $table->foreign('thread_id')->references('id')->on('portal_portal_user_threads');
            $table->unsignedBigInteger('user_id');
            $table->string('status', 1);
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_thread_messages');
    }
};
