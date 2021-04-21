<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcompanies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('link');
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->integer('stats1_value')->default(0);
            $table->string('stats1_text')->default('Stats 1 text');
            $table->integer('stats2_value')->default(0);
            $table->string('stats2_text')->default('Stats 2 text');
            $table->integer('order')->unsigned()->default(0);
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
        Schema::dropIfExists('subcompanies');
    }
}
