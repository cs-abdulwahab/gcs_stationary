<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->integer('category_id')->unsigned();
            $table->string('product_id');
            $table->string('user_id');
            $table->string('created_by')->nullable();
          
            $table->string('title');
            $table->string('qty');
            $table->string('product_brand')->nullable();
            $table->string('description')->nullable();
            $table->string('feature')->nullable();
            $table->string('age_group')->nullable();
            $table->string('per_day_cost')->nullable();
            $table->string('per_weak_cost')->nullable();
            $table->string('per_month_cost')->nullable();
            $table->string('security_cost')->nullable();
            $table->string('rentee_start_date')->nullable();
            $table->string('rentee_end_date')->nullable();
            $table->string('net_total')->nullable();
            $table->string('usage_policy')->nullable();
            $table->string('status')->nullable();
          
            $table->string('image');
            $table->string('video')->nullable();
            $table->string('product_address')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
