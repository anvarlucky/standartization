<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\v1\Role;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user = 'admin.users';

    public function index(){
        $users = User::all();
        return view($this->user.'.index',['users' => $users]);
    }

    public function create(){
        $roles = Role::all();
        return view($this->user.'.create',['roles' => $roles]);
    }

    public function store(UserRequest $request){
        $user = new User();
        $user->remember_token = $request['_token'];
        $user->role_id = $request['role_id'];
        $user->name = $request['name'];
        $user->login = $request['login'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        if ($user == true){
            return redirect()->route('users.index');
        }
    }

    public function edit($id){
        $user = User::where('id',$id)->first();
        dd(md5($user->password));
        $roles = Role::all();
        return view($this->user.'.edit',['user' => $user,'roles' => $roles]);
    }

    public function update($id,Request $request){
        $user = User::where('id',$id)->first();
        $user->remember_token = $request['_token'];
        $user->role_id = $request['role_id'];
        $user->name = $request['name'];
        $user->login = $request['login'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        if ($user == true){
            return redirect()->route('users.index');
        }
    }

    public function destroy($id){
        $user = User::destroy($id);
        if ($user == true){
            return redirect()->route('users.index');
        }
    }
}
