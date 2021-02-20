<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('product_id');
            $table->string('created_by')->nullable();
            $table->string('title');
            $table->string('qty');
            $table->string('product_brand')->nullable();
            $table->string('description');
            $table->string('feature')->nullable();
            $table->string('age_group')->nullable();
            $table->string('per_day_cost');
            $table->string('per_weak_cost');
            $table->string('per_month_cost');
            $table->string('security_cost');
            $table->string('rule_while_using')->nullable();
            $table->string('term_condition');
            $table->string('required_document')->nullable();
            $table->string('usage_policy')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('product_address')->nullable();
            $table->string('rentee_start_date')->nullable();
            $table->string('rentee_end_date')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
