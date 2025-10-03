<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffopsTable extends Migration
{
    public function up()
    {
        Schema::create('offops', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->date('birthdate');
            $table->string('gender');
            $table->string('cardnumber', 20);
            $table->string('patent', 20);
            $table->string('nip', 20);
            $table->string('unity', 255);
            $table->string('province', 50);
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offops');
    }
}
