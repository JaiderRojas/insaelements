<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Movement;
use App\People;
class CreateResponsabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id(); 
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('people');
            $table->unsignedBigInteger('id_usuarios');
            $table->foreign('id_usuarios')->references('id')->on('people');
            $table->string('responsible_movement')->nullable();
            $table->date('fecha')->nullable();
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
        Schema::dropIfExists('responsabilities');
        
    }
}
