<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBarrackTable extends Migration
{
    public function up()
    {
        Schema::create('company_barrack', function (Blueprint $table) {
            $table->unsignedBigInteger('num_company_fk');
            $table->unsignedBigInteger('cod_barrack_fk');
            $table->timestamps();

          
            $table->foreign('num_company_fk')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('cod_barrack_fk')->references('id')->on('barracks')->onDelete('cascade');

            $table->primary(['num_company_fk', 'cod_barrack_fk']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_barrack');
    }
}
