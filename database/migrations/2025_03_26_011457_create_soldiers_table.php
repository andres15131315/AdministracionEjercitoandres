<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateSoldiersTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('soldiers', function (Blueprint $table) {  
            $table->id();   
            
            $table->string('first_name', 30);  
            $table->string('last_name', 30);  
            $table->string('rank', 20);  
            
            $table->unsignedBigInteger('code_ac_fk');  
            $table->unsignedBigInteger('cod_barrack_fk');  
            $table->unsignedBigInteger('num_comp_fk');  
            $table->timestamps();  

            
            $table->foreign('code_ac_fk')->references('id')->on('army_corps')->onDelete('cascade');  
            $table->foreign('cod_barrack_fk')->references('id')->on('barracks')->onDelete('cascade');  
            $table->foreign('num_comp_fk')->references('id')->on('companies')->onDelete('cascade');  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('soldiers');  
    }  
}  
