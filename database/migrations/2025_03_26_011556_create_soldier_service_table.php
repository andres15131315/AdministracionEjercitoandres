<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldierServiceTable extends Migration
{
    public function up()
    {
        Schema::create('soldier_service', function (Blueprint $table) {
            $table->unsignedBigInteger('code_service_fk');
            $table->unsignedBigInteger('code_soldier_fk');
            $table->date('date');
            $table->timestamps();

            
            $table->foreign('code_service_fk')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('code_soldier_fk')->references('id')->on('soldiers')->onDelete('cascade');

            $table->primary(['code_service_fk', 'code_soldier_fk']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('soldier_service');
    }
}
