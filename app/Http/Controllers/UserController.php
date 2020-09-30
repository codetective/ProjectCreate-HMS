<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RecordsModel;
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

    $user = Auth::user();
    $userlist = [];
    $records = RecordsModel::all();
    if ($user->role === 'Admin' || $user->role === 'superadmin') {
        $userlist = User::all();
    }
return view('dashboard', compact(['user', 'userlist', 'records']));
}
public function createpatients(Request $input){
        $input->validate([
            'patient_name' => ['required', 'string', 'max:255'],
            'patient_condition' => ['string', 'max:100'],
            'added_by' => ['required'],
        ]);

        $record_created = RecordsModel::create([
            'patient_name' => $input['patient_name'],
            'patient_condition' => $input['patient_condition'],
            'added_by' => $input['added_by'],
        ]);
        if (!$record_created) {
            return redirect()->back()->withErrors(['error' => 'an error occurred : record cannot be created']);
        }

        return redirect('/dashboard')->withErrors(['status' => 'record created successfully']);
    }



public function edit(Request $request,$id){
    $userlist = User::findorFail($id);
    return view('edituser')->with('users',$userlist);

}

public function update(Request $request,$id){
   $userlist = User::find($id);

   // $users-> update([ 
   //     // 'name'=>$data->user_name,
   //     // 'user_type'=>$data->user_type,
   //     $users->name = $request->input('user_name'),
   //     $users->user_type = $request->input('user_type'),
   // ]);
   $userlist->name = $request->input('name');
       $userlist->role = $request->input('role');
   
   $userlist->update();

   return redirect('/dashboard')->with('status','Your Data is Updated');
}



// public function delete($id){
//     $user->delete($id);
//     return redirect('/dashboard')->with('status','deleted');
// }

public function delete(Request $request, $id){
    $userlist = User::find($id);
    $userlist->delete();

    return redirect('/dashboard')->with('status','Your Data is deleted');
}



}

