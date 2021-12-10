<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $title = "Artiliser | Profile";
        $data = User::find($id);
        return view('frontend.profile.index', compact('data', 'title'));
    }

    public function changePass(){
        $title = "Artiliser | Change Password";
        return view('frontend.profile.change-password', compact( 'title'));
    }

    public function editProfile(){
        $title = "Artiliser | Edit Profile";
        return view('frontend.profile.edit-profile', compact( 'title'));
    }
}