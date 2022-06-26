<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserController extends Controller
{
    public function index(){

        return view ('admin.users.index')->with(['users' => User::all()]);

    }

    public function store(){

    }

    public function update(Request $request, $id){

    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.users.show', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id == $user->id) {
            Session::flash('error', 'Je kan niet jezelf verwijderen...');
            return redirect()->route('admin.index');
        } elseif(Auth::user()->admin && $user->admin) {
            Session::flash('error', 'Je kan geen andere admins verwijderen....');
            return redirect()->route('admin.index');
        } elseif(Auth::user()->admin) {
            $user->delete();
            Activity::all();
            Session::flash('message', 'De user is met succes verwijderd.');

            return redirect()->route('admin.index');
        } else {
            Session::flash('error', 'Helaas, dit mag jij niet doen.');
            return redirect()->route('dashboard');
        }
    }
}
