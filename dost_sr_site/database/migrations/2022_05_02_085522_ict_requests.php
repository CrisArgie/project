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
        Schema::create('ict_request', function (Blueprint $table) {
            $table->foreignId('ict_form_id');
            $table->foreignId('equipment_id');
            $table->foreignId('image_id')->nullable();
            $table->foreignId('document_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ict_request');
    }
};
