<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        return view ('admin.users.index')->with(['users' => User::all()]);

    }

    public function store(){

    }

    public function update(Request $request, $id){

    }

    public function showUser(){

    }
}
