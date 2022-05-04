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
            $table->string('repair_shop');
            $table->date('repair_shop_date');
            $table->integer('invoice_no');
            $table->integer('job_order_no');
            $table->date('job_order_date');
            $table->integer('amt_no');
            $table->text('payable_account');
            $table->text('recommendation');
            $table->timestamps();
            $table->foreignId('pre_repair_inspections_id');
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
