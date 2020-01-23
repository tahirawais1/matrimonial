<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','password' ,'phone' ,'name' ,'gender' ,'cast' ,'image' ,'city' ,'country' ,'address' ,'religion' ,'mother_tongue' ,'martial_status' ,'height' ,'educationLevel' ,'educationField' ,'profession' ,'income' ,'ProfileCreatedBy' ,'age' ,'description' ,'familyDetail' ,'Pref_Cast' ,'Pref_martialStatus' ,'Pref_educationLevel' ,'Pref_educationField' ,'Pref_city' ,'Pref_country' ,'Pref_height' ,'Pref_religion' ,'Pref_motherTongue' ,'Pref_profession' ,'Pref_income'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}