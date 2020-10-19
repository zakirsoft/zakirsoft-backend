<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            // multiple_image

            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->string('image');
            $table->text('description');
            $table->string('live_link')->nullable();
            $table->string('bahance_link')->nullable();
            $table->string('project_length');
            $table->text('our_role');
            $table->text('tool_used');
            $table->string('client_name');
            $table->string('client_email');
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
        Schema::dropIfExists('portfolios');
    }
}
