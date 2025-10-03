<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrustPeopleTask extends Migration
{
    public function up()
    {
         Schema::create('trust_people_task', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('description');
            $table->date('dateInit');
            $table->date('dateEnd');
            $table->unsignedBigInteger('fk_idPc');
            $table->foreign('fk_idPc')->references('id')->on('trust_people')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->SoftDeletes();
            $table->timestamps();
        });           
    }

    public function down()
    {
        Schema::dropIfExists('trust_people_task');
    }
}
