<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateBarracksTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('barracks', function (Blueprint $table) {  
            $table->id();   
          
            $table->string('name_barrack', 30);  
            $table->string('location', 10);  
            $table->timestamps();  
        });  
    }  

    public function down()  
    {  
        Schema::dropIfExists('barracks');  
    }  
}   
