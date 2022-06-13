<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_forms', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_requested');
            $table->string('request_no');
            $table->foreignId('users_id')->unsigned()->nullOnDelete();
            $table->foreignId('equipment_id')->unsigned();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreignId('type_of_requests_id')->unsigned();
            $table->text('type_request_description')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ict_forms');
    }
};
