<?php namespace Portal\Portal\Updates;

use Portal\Portal\enums\CommonStatuses;
use Portal\Portal\enums\PaymentTypes;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreatePaymentsTable Migration
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
        Schema::create('portal_portal_payments', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('class');
            $table->string('status', 1)->default(CommonStatuses::DISABLE);
            $table->string('type', 1)->default(PaymentTypes::TEST);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_portal_payments');
    }
};
