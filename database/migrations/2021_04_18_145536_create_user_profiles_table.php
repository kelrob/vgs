<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('dob')->nullable();
            $table->text('about')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('resume')->nullable();
            $table->string('avatar')->nullable();
            $table->string('pref_job_title')->nillable();
            $table->string('pref_role')->nullable();
            $table->string('pref_job_level')->nullable();
            $table->string('pref_industry')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_profiles');
    }
}
