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
        Schema::create('ict_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ict_forms_id');
            $table->foreignId('equipment_id');
            $table->foreignId('images_id')->nullable();
            $table->foreignId('documents_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ict_requests');
    }
};
