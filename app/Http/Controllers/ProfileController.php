<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        if (strlen(trim($request->password))){
            $newPassword = Hash::make($request->password);
        }
        if (Hash::check($request->oldPassword, auth()->user()->password)) {
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($newPassword)
            ]);
            $request->session()->flash('message', 'User updated successfully!');
            return redirect()->route('users.index');
        } else {
            $request->session()->flash('errorMessage', 'Old Password does not match');
            return redirect()->route('auth.profile');
        }

    }
}
