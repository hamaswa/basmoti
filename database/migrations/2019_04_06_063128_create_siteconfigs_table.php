<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteconfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteconfigs', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title');
            $table->string("facebook");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("youtube");
            $table->string("pintrest");
            $table->string("gallerytitle");
            $table->text("gallerydescription");
            $table->string("menutitle");
            $table->text("menudescription");
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
        Schema::dropIfExists('siteconfigs');
    }
}
