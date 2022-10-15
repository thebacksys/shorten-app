<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        if (request()->has('signature') && !request()->hasValidSignature()) {
            return redirect()->route('register');
        }

        return view('guest.pages.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'team_id' => request()->input('team', null),
        ]);

        if (!request()->has('team')) {
            $team = \App\Models\Team::create([
                'owner_id' => $user->id,
                'name' => $data['email'],
            ]);

            $user->update(['team_id' => $team->id]);
        }

        return $user;
    }
}
