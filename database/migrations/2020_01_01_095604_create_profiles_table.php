<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();

            $table->string('password');
            $table->string('create_profile_for');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('religion');
            $table->string('mother_tongue');
            $table->string('country');
            $table->string('city');
            $table->string('lives_with_parents');
            $table->string('martial_status');
            $table->string('diet');
            $table->string('height');
            $table->string('cast');
            $table->string('education_level');
            $table->string('education_field');
            $table->string('profession');
            $table->string('instiute');
            $table->string('company');
            $table->string('income_type');
            $table->string('works_with');
            $table->string('income_amount');
            $table->string('mobile_number');
            $table->string('description');
            $table->string('photos');

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
        Schema::dropIfExists('profiles');
    }
}
