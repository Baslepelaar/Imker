<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view ('admin.users.index')->with(['users' => User::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input = User::find($user);
        $input->name = $request->name; //ik weet niet waarom ik hier alles handmatig moet invoeren
        $input->email = $request->email;
        $input->note = $request->note;
        $input->update();
        //$artikel->update($input);
//      $artikel->update($request->all());

        return redirect()->route('users')
            ->with('success','Artikel succesvol bijgewerkt');


//        $updatedUser = $user->update($request->validated());
//
////        Session::flash('message', 'De gebruiker is met succes aangepast.');
//        $message = "Je hebt een gebruiker bewerkt";
////        Activity::all();
//
//        return redirect()->route('users');
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
//            Session::flash('error', 'Je kan niet jezelf verwijderen...');
            $message = "can't remove self";
        } elseif(Auth::user()->admin && $user->admin) {
//            Session::flash('error', 'Je kan geen andere admins verwijderen....');
            $message = "Mag geen adnere admins verwijderen";
        } elseif(Auth::user()->admin) {
            $user->delete();
//            Session::flash('message', 'De user is met succes verwijderd.');
            $message = "Je hebt een gebruiker verwijderd";

        } else {
//            Session::flash('error', 'Helaas, dit mag jij niet doen.');
            return redirect()->route('dashboard');
        }
        return redirect()->route('users')->withInput();
    }
}
