<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Movement;
use App\Element;

class CreateMovementDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movement_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')->constrained('elements')->onDelete('cascade');
            $table->integer('total');
             $table->foreignId('movement_id')->constrained('movements')->onDelete('cascade');
            
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
        Schema::dropIfExists('movement_details');
    }
}
