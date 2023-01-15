<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("product_code");
            $table->string("name");
            $table->integer("subcategory_id")->nullable();
            $table->integer("brand_id")->nullable();
            $table->integer("unit_id");
            $table->decimal("vat");
            $table->integer("re_order");
            $table->decimal("purchase_rate");
            $table->decimal("selling_rate");
            $table->decimal("wholesale_rate");
            $table->string("image")->nullable();
            $table->char("status", 5)->default("a");
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
