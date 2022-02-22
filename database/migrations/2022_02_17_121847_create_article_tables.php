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
        Schema::create('article_tables', function (Blueprint $table) {
            $table->id();
            $table->string('probCategory');
            $table->string('source');
            $table->string('probType');
            $table->string('probItem');
            $table->string('probSummary');
            $table->string('source_AppId');
            $table->string('contactEmailId');
            $table->string('contactMobileNo');
            $table->string('type');
            $table->string('description');
            $table->string('clientId');
            $table->string('lastName');
            $table->string('firstName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tables');
    }
};
