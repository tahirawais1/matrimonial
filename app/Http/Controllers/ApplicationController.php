<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ApplicationController extends Controller
{

    // public function showAllAuthors()
    // {
    //     return response()->json(Author::all());
    // }




    // profile apis

    public function createProfile(Request $request)
    {
        $author = Profile::create($request->all());
        
        return response()->json($author, 201);
    }

    public function showOneProfile($id)
    {
        return response()->json(Profile::find($id));
    }

    public function showallProfiles()
    {
        return response()->json(Profile::all());
    }

    public function showOppositeGenderProfiles($gender)
    {
        $profiles = DB::table('profiles')->where('gender', '=', $gender)->get();
        return response()->json($profiles);
    }

    public function updateProfile($id, Request $request)
    {
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());

        return response()->json($profile, 200);
    }


    public function search(Request $filters) {

        $result =  DB::table('profiles');
        $result->select();
        
        if ($filters->input('religion')) {
            $result->where('religion','=', $filters->input('religion'));
        }

        if ($filters->input('country')) {
            $result->where('country','=', $filters->input('country'));
        }

        if ($filters->input('city')) {
            $result->where('city','=', $filters->input('city'));
        }

        if ($filters->input('education_level')) {
            $result->where('education_level','=', $filters->input('education_level'));
        }

        if ($filters->input('mother_tongue')) {
            $result->where('mother_tongue','=', $filters->input('mother_tongue'));
        }

        if ($filters->input('cast')) {
            $result->where('cast','=', $filters->input('cast'));
        }

       
            return response()->json($result->get());

       

    }
  

}

