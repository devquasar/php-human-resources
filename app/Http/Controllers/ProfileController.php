<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function editProfile($id)
    {
        $profile = new Employee;
        return view('profile.edit', ['data' => $profile->find($id)]);
    }
    
    public function editProfileSubmit($id, Request $req)
    {
        $profile = Employee::find($id);
        $profile->first_name = $req->input('first_name');
        $profile->second_name = $req->input('second_name');
        $profile->last_name = $req->input('last_name');
        $profile->username = $req->input('username');
        $profile->email = $req->input('email');
        $profile->address = $req->input('address');
        $profile->start_work = $req->input('start_work');
        $profile->end_work = $req->input('end_work');
        $profile->phone = $req->input('phone');

        $profile->save();

        return redirect()->route('profile.all')->with('success', 'Профиль был обновлен');
    }

    public function editUser($id)
    {
        $profile = new User;
        return view('user.edit', ['data' => $profile->find($id)]);
    }
    
    public function editUserSubmit($id, Request $req)
    {
        $profile = User::find($id);
        $profile->first_name = $req->input('first_name');
        $profile->second_name = $req->input('second_name');
        $profile->last_name = $req->input('last_name');
        $profile->username = $req->input('username');
        $profile->email = $req->input('email');
        $profile->birth_date = $req->input('birth_date');
        $profile->address = $req->input('address');
        $profile->start_work = $req->input('start_work');
        $profile->end_work = $req->input('end_work');
        $profile->phone = $req->input('phone');

        $profile->save();

        return redirect()->route('profile.all')->with('success', 'Вы обновили свой профиль');
    }

    public function allProfiles(Request $request)
    {
        $users = Employee::all();
        return view('profile.index')->with('users', $users);
    }
    public function createProfiles()
    {
        return view('profile.create');
    }
    public function createProfilesSubmit(ProfileRequest $request)
    {
        Employee::create([
            'first_name' => $request->input('first_name'),
            'second_name' => $request->input('second_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'birth_date' => $request->input('birth_date'),
            'address' => $request->input('address'),
            'start_work' => $request->input('start_work'),
            'end_work' => $request->input('end_work'),
            'phone' => $request->input('phone'),
          ]);
          return redirect()
                ->route('profile.all')
                ->with('info', 'Вы успешно добавили данные!');
    }
}
