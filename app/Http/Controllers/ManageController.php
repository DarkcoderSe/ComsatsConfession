<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Permission;

use Auth;

class ManageController extends Controller
{
    public function index(){
      $roles = Role::all();
      $permissions = Permission::all();
      $users = User::all();

      return view('admin.index')->with([
        'roles' => $roles,
        'permissions' => $permissions,
        'users' => $users
      ]);
    }
    public function role_sumbmit(Request $request){
      $role = new Role;
      $role->name = $request->role_name;
      $role->display_name = $request->display_name;
      $role->description = $request->description;
      $role->save();

      return redirect()->back();
    }
    public function permission_submit(Request $request){
      $permission = new Permission;
      $permission->name = $request->permission_name;
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();

      return redirect()->back();
    }
    public function user_submit(Request $request){
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      $role = Role::find($request->role_id);

      $user->attachRole($role);
      return redirect()->back();
    }
    public function assign_permissions($id){
      $permissions = Permission::all();
      return view('admin.assign_permissions')->with([
        'permissions' => $permissions,
        'role_id' => $id
      ]);
    }
    public function assign_permissions_submit(Request $request){
      // dd($request);
      $role = Role::find($request->role_id);
      for($i=0; $i < count($request->permissions); $i++){
        $permission = Permission::find($request->permissions[$i]);
        echo $permission->display_name . "  " . $request->permissions[$i];
        $role->attachPermission($permission);
      }
      return " done ";
    }
}
