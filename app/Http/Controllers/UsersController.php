<?php

namespace App\Http\Controllers;

use App\Configuration;
use App\Currency;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        $settings = Configuration::findOrFail(1);
        $users = User::with('role')->get();
        $currencies = Currency::all();
        return view('Admin.settings.users.users',compact('users','settings','currencies'));
    }
    public function activate($id){
        User::where('id',$id)
            ->update(['is_active' => 1]);
        return back()
            ->with('success','User activated successfully');
    }
    public function deactivate($id){
        User::where('id',$id)
            ->update(['is_active' => 0]);
        return back()
            ->with('success','User deactivated successfully');
    }
    public function userUpdate(Request $request){

        User::where('id',$request->user_id)
            ->update(['name'=>$request->name,'role_id'=>$request->role_id,'is_active'=>$request->is_active]);
        return back()
            ->with('success','User updated successfully');
    }
    public function edit($id){
        $users = User::find($id)->with('role')->get();
//        return $users;
        return view('Admin.settings.users.editUser',compact('id','users'));
    }
    public function update(Request $request){
        User::where('id',$request->user_id)
            ->update(['name'=>$request->name,'role_id'=>$request->role]);
        return back()->with('success','user updated successfully');
    }
    public function showRegistrationForm(){
        return view('Admin.settings.users.registerUser');
    }
    public function userCreate(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($data->fails()){
            return back()->with(['errors'=>$data->errors()->toArray()]);
        }else{
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role_id' => 1,
                'password' => Hash::make($data['password']),
            ]);
            return redirect(\route('users.list'))
                ->with('success','user created successfully');
        }
    }
}
