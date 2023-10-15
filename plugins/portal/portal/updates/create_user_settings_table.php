<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\UserSetting;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateUserSettingsTable Migration
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
        Schema::create('portal_portal_user_settings', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string(UserSetting::GET_EMAIL_FROM_ADMIN, 1);
            $table->string(UserSetting::PUBLIC_PROFILE, 1);
            $table->string(UserSetting::GET_NOTIFICATIONS, 1);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_user_settings');
    }
};
