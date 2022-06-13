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
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->date('date_requested');
            $table->string('request_no');
            $table->text('description_of_property_type');
            $table->text('location');
            $table->date('acquisition_date');
            $table->string('acquisition_cost');
            $table->text('problem_encountered')->nullable();
            $table->text('corrective_action_performed')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreignId('users_id')->unsigned()->nullOnDelete();
            $table->foreignId('equipment_id')->unsigned();
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
        Schema::dropIfExists('repair_requests');
    }
};
