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
            $table->text('detail_of_defects')->nullable();
            $table->date('date_of_latest_repair')->nullable();
            $table->date('mature_of_latest_repair')->nullable();
            $table->text('pre_repair_assessment_done')->nullable();
            $table->timestamps();
            $table->foreignId('repair_requests_id');
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
