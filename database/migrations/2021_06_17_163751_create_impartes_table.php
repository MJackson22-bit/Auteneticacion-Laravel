<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impartes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("c_codclase");
            $table->unsignedBigInteger("p_idprofesor");
            $table->unsignedBigInteger("a_idaula");
            
            $table->foreign("c_codclase")->references("id")->on("clases")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("p_idprofesor")->references("id")->on("profesors")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("a_idaula")->references("id")->on("aulas")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('impartes');
    }
}
