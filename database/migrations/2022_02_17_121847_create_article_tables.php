<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('applicationID');
            $table->string('description');
            $table->string('type');
            $table->string('contactMobileNo');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('contactEmailId');
            $table->string('probCategory');
            $table->string('probType');
            $table->string('probItem');
            $table->string('probSummary');
            $table->timestamp('submitted_at');
           
        
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
