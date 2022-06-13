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
        Schema::create('post_repair_inspections', function (Blueprint $table) {
            $table->id();
            $table->string('repair_shop')->nullable();
            $table->date('repair_shop_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('job_order_no')->nullable();
            $table->date('job_order_date')->nullable();
            $table->string('amt_no')->nullable();
            $table->text('payable_account')->nullable();
            $table->text('recommendation')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreignId('pre_repair_inspections_id')->unsigned()->nullOnDelete();
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
        Schema::dropIfExists('post_repair_inspections');
    }
};
