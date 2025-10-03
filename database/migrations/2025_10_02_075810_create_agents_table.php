<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->string('covername', 255);
            $table->string('gender');
            $table->integer('age');
            $table->string('province', 50);
            $table->string('speciality', 255);
            $table->string('status', 20);
            $table->date('enterDate');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
