<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile($id)
    {
        $profile = new Users;
        return view('profile.edit', ['data' => $profile->find($id)]);
    }
}
