<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliveSettingServiceMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alive_setting_service_metas', function (Blueprint $table) {
            $table->increments('id');

            // user id with foreign key
            $table->unsignedInteger('user_id')->index()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // key
            $table->text('key')->nullable();

            // value
            $table->text('value')->nullable();

            // extra_value
            $table->text('extra_value')->nullable();

            // scope
            $table->text('scope')->nullable();

            // is enable or disable
            $table->boolean('revoked')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alive_setting_service_metas');
    }
}
