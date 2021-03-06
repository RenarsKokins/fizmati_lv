<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_reactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('image_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('reaction', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_reactions');
    }
}
