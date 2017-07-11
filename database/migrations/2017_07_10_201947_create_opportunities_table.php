<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('splash')->default('default.jpg');
            $table->text('pitch_summary');
            $table->integer('total_investment');
            $table->integer('min_investment');
            $table->string('location');
            $table->integer('industry_id');
            $table->text('plan_summary');
            $table->text('profile_summary');
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
        Schema::dropIfExists('opportunities');
    }
}
