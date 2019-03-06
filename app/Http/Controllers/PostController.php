<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    //
    public function edit(){
      $user = Auth::user();
      if($user->hasRole('manager')){
        if($user->can('edit-post')){
          return "OK";
        }
      }
      return "role please";
    }
    public function create(){
      $user = Auth::user();
      if($user->hasRole('manager')){
        if($user->can('create-post')){
          return "OK";
        }
      }
      return "role please";
    }
    public function delete(){
      $user = Auth::user();
      if($user->hasRole('manager')){
        if($user->can('delete-post')){
          return "OK";
        }
      }
      return "role please";
    }
}
