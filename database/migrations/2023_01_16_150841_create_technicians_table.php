<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("username")->unique();
            $table->string("email")->unique();
            $table->string("password");
            $table->string("mobile", 15);
            $table->integer("thana_id");
            $table->string("address");
            $table->string("gender", 20);
            $table->char("status", 5)->default("p");
            $table->string("image")->nullable();
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
        Schema::dropIfExists('technicians');
    }
}
