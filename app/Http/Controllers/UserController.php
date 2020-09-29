<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function redirect;

use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index(){
        return view('welcome')
;
    }
    public function create(Request $input)
    {
            $input->validate([
                'name' => ['required', 'string', 'max:255', 'unique:users'],
                'role' => ['string', 'max:100'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:5'],
            ]);

            $user_created = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'role' => $input['role'],
                'password' => Hash::make($input['password']),
            ]);
            if (!$user_created) {
                return redirect()->back()->withErrors(['error' => 'an error occurred : user cannot be created']);
            }
            return redirect('/dashboard')->withErrors(['status' => 'user created successfully']);

    }
public function dashboard(){

$user_type = Auth::user()->role;
return view('dashboard', compact(['user_type']));

}
}

