<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\UserProfileFields;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateUserProfilesTable Migration
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
        Schema::create('portal_portal_user_profiles', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string(UserProfileFields::COUNTRY, 1);
            $table->string(UserProfileFields::EXPERIENCE, 1);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_user_profiles');
    }
};
