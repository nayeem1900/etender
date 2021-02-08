<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tproduct_id');
            $table->string('brand');
            $table->string('orgin');
            $table->string('unit');
            $table->double('unit_price');
            $table->string('pack_size');
            $table->double('total_qty');
            $table->double('total_price');
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

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
        Schema::dropIfExists('stproducts');
    }
}
