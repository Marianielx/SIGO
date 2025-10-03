<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsMissionsTable extends Migration
{
    public function up()
    {
        Schema::create('as_missions', function (Blueprint $table) {
            $table->id();
            $table->string('description', 255);
            $table->string('status', 20);
            $table->unsignedBigInteger('fk_idMission');
            $table->foreign('fk_idMission')->references('id')->on('missions')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_idAgent');
            $table->foreign('fk_idAgent')->references('id')->on('agents')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->date('dateInit');
            $table->date('dateEnd');
            $table->longText('body');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('as_missions');
    }
}
