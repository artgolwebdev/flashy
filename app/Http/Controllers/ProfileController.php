<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    protected $apiEndpoint= "https://json.flashy.dev/profile-";

    public function index($id=null)
    {
        if(!isset($id)){
            abort(404);
        }

        $profile_data = Http::get($this->apiEndpoint.$id)->json();
        

        if(isset($profile_data["success"])&&$profile_data["success"]==false){
            abort(404);
        }

        return view('profile',compact('profile_data'));

    }
}
