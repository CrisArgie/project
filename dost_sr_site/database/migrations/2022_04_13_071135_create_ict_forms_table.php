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
            $table->foreignId('users_id');
            $table->timestamps();
            $table->foreignId('type_of_requests_id');
            $table->text('type_request_description');
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
