<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('hero_image');
            $table->string('reward_motcash');
            $table->string('reward_mobcash');
            $table->string('reward_bigmocash');
            $table->string('reward_rumahcash');
            $table->string('peluang_title');
            $table->text('peluang_description');
            $table->string('peluang_image');
            $table->string('penghasilan_title');
            $table->string('penghasilan_image');
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
        Schema::dropIfExists('frontends');
    }
}
