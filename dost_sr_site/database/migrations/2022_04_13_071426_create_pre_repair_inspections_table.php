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
        Schema::create('pre_repair_inspections', function (Blueprint $table) {
            $table->id();
            $table->text('detail_of_defects');
            $table->date('date_of_latest_repair');
            $table->date('mature_of_latest_repair');
            $table->text('pre_repair_assessment_done');
            $table->timestamps();
            $table->foreignId('request_id');
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
        Schema::dropIfExists('pre_repair_inspections');
    }
};
