<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateArmyCorpsTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('army_corps', function (Blueprint $table) {  
            $table->id();   
        
            $table->integer('denomination_ac');  
            $table->timestamps();  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('army_corps');  
    }  
}  
