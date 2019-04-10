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
            $table->string('email');
            $table->string('location');
            $table->text('map');//->default("https://www.google.com/maps/place/Pakistan+Medical+%26+Dental+Council/@33.6731086,73.0219696,17z/data=!4m5!3m4!1s0x38df9589f4b0e2ff:0x2ef74aae5c056e64!8m2!3d33.6729569!4d73.0230533");
            $table->string("saturday")->default("9:00 AM - 9:00 PM");
            $table->string("sunday")->default("9:00 AM - 9:00 PM");
            $table->string("monday")->default("9:00 AM - 9:00 PM");
            $table->string("tuesdayday")->default("9:00 AM - 9:00 PM");
            $table->string("wednesday")->default("9:00 AM - 9:00 PM");
            $table->string("thursday")->default("9:00 AM - 9:00 PM");
            $table->string("friday")->default("9:00 AM - 9:00 PM");
            $table->string('phone')->default("9:00 AM - 9:00 PM");
            $table->string("copyright")->default("Copyright © Basmoti. All Right Reserved.");
            $table->text("contact_us");
            $table->string('title');
            $table->string("site_logo");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("instagram")->default("");
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
