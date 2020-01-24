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
            $table->bigInteger('phone')->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('cast');
            $table->string('image');
            $table->string('city');
            $table->string('country');
            $table->string('address');
            $table->string('religion');
            $table->string('community');
            $table->string('mother_tongue');
            $table->string('martial_status');
            $table->string('height');
            $table->string('educationLevel');
            $table->string('educationField');
            $table->string('profession');
            $table->string('income');
            $table->string('profileCreatedBy');
            $table->string('age');
            $table->longText('description');
            $table->longText('familyDetail');
            $table->string('pref_Cast');
            $table->string('pref_community');
            $table->string('pref_martialStatus');
            $table->string('pref_educationLevel');
            $table->string('pref_educationField');
            $table->string('pref_city');
            $table->string('pref_country');
            $table->string('pref_height');
            $table->string('pref_religion');
            $table->string('pref_motherTongue');
            $table->string('pref_profession');
            $table->string('pref_income');

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

