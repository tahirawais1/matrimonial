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
            $table->string('mother_tongue');
            $table->string('martial_status');
            $table->string('height');
            $table->string('educationLevel');
            $table->string('educationField');
            $table->string('profession');
            $table->string('income');
            $table->string('ProfileCreatedBy');
            $table->string('age');
            $table->longText('description');
            $table->longText('familyDetail');
            $table->string('Pref_Cast');
            $table->string('Pref_martialStatus');
            $table->string('Pref_educationLevel');
            $table->string('Pref_educationField');
            $table->string('Pref_city');
            $table->string('Pref_country');
            $table->string('Pref_height');
            $table->string('Pref_religion');
            $table->string('Pref_motherTongue');
            $table->string('Pref_profession');
            $table->string('Pref_income');

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

