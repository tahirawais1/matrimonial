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
        'email','password','community','phone' ,'name' ,'gender' ,'cast' ,'image' ,'city' ,'country' ,'address' ,'religion' ,'mother_tongue' ,'martial_status' ,'height' ,'educationLevel' ,'educationField' ,'profession' ,'income' ,'profileCreatedBy' ,'age' ,'description' ,'familyDetail' ,'pref_Cast' ,'pref_martialStatus' ,'pref_educationLevel' ,'pref_educationField' ,'pref_city' ,'pref_country' ,'pref_height' ,'pref_religion' ,'pref_motherTongue' ,'pref_profession','pref_community' ,'pref_income'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}