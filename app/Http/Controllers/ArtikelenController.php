<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelenController extends Controller
{
    public function index(){

        return view ('admin.Artikelen.index');

    }

    public function store(){

    }

    public function update(Request $request, $id){

    }

    public function showUser(){

    }
}
