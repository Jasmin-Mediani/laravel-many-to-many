<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained(); //foreign-key di page (page_id)
            $table->foreignId('tag_id')->constrained(); //foreign-key di tag (tag_id)
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
        Schema::dropIfExists('page_tag');
    }
}
