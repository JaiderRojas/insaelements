<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Insa\Entities\Element;
class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('inventoryCode');
            $table
                ->foreignId('element_id')
                ->constrained('elements')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_cuentadante')->nullable();
            $table
                ->foreign('id_cuentadante')
                ->references('id')
                ->on('people');
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
        Schema::dropIfExists('inventories');
    }
}
