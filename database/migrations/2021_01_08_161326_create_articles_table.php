<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
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


            $table->string('titre');
            $table->string('description');
            $table->string('image');
            $table->integer('prix');
            $table->integer('quantite');

            $table->unsignedBigInteger('souscategorie_id');
            $table->foreign('souscategorie_id')
            ->references('id')
            ->on('souscategories')
            ->onDelete('restrict')
            ->onUpdate('restrict');


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
        Schema::dropIfExists('articles');
    }
}
