<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrustPeopleTable extends Migration
{
    public function up()
    {
        Schema::create('trust_people', function (Blueprint $table) {
            $table->id();
            $table->string('fullName', 255);
            $table->string('relationShip', 255);
            $table->integer('cellPhone');
            $table->string('province', 50);
            $table->date('birthDate');
            $table->string('gender');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trust_people');
    }
}
