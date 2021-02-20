<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->unsignedBigInteger('created_by');
            $table->string('title');
            $table->string('qty');
            $table->string('product_brand')->nullable();
            $table->string('description');
            $table->string('feature')->nullable();;
            $table->string('age_group')->nullable();
            $table->string('per_day_cost');
            $table->string('per_weak_cost')->nullable();;
            $table->string('per_month_cost')->nullable();;
            $table->string('security_cost')->nullable();;
            $table->string('rule_while_using')->nullable();;
            $table->string('term_condition')->nullable();;
            $table->string('required_document')->nullable();;
            $table->string('usage_policy')->nullable();;
            $table->string('image')->nullable();;
            $table->string('video')->nullable();
            $table->string('product_address')->nullable();
            $table->string('rating')->nullable();

            $table->foreign( 'category_id' )
            ->references( 'id' )->on( 'categories' );
            $table->foreign('created_by')
            ->references('id')->on('users');
            
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
        Schema::dropIfExists('products');
    }
}
