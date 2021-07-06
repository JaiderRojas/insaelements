<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\People;
use Modules\Insa\Entities\Loan;


class CreateAuthorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('people_id')->constrained('people')->onDelete('cascade');
            $table->foreignId('loan_id')->constrained('loans')->onDelete('cascade');
            

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
        Schema::dropIfExists('authorizations');
    }
}

