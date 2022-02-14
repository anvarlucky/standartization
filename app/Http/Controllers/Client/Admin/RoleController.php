<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('admin.roles.index',['roles' => $roles]);
    }

    public function create(){
        $actions = ['title' => ['create','read','update','delete']];

        return view('admin.roles.create',['actions' => $actions]);
    }

    public function store(Request $request){
        $role = new Role();
        $role->name = $request['name'];
        $role->action = $request['action'];
        $role->save();
        if($role==true){
            return redirect()->route('roles.index');
        }
    }

    public function edit($id){
        $role = Role::select('*')->where('id',$id)->first();
        return view('admin.roles.edit',['role' => $role]);
    }

    public function update(Request $request, $id){
        $role = Role::select('*')->where('id',$id)->first();
        $role->name = $request['name'];
        $role->action = $request['action'];
        $role->save();
        if ($role == true){
            return redirect()->route('roles.index');
        }
    }

    public function destroy($id){
        $role = Role::destroy($id);
        if ($role == true){
            return redirect()->route('roles.index');
        }
    }
}
