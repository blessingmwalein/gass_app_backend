<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTankPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tank_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tank_type_id')->constrained();
            $table->foreignId('tank_brand_id')->constrained();
            $table->float('price');
            $table->integer('qty');
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
        Schema::dropIfExists('tank_properties');
    }
}
 