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
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('title_slug');
            $table->string('image');
            $table->text('description');
            $table->text('live_link')->nullable();
            $table->text('bahance_link')->nullable();
            $table->string('project_length');
            $table->text('our_role');
            $table->text('tool_used');
            $table->string('client_name');
            $table->string('client_email');
            $table->integer('order')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');
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
