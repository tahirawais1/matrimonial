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
    protected $fillable = ['email','password','create_profile_for','first_name','gender','last_name','dob','religion','mother_tongue','country','city','lives_with_parents','martial_status','diet','height','cast','education_level','education_field','profession','instiute','company','income_type','works_with','income_amount','mobile_number','description','photos'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}