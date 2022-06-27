<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Spatie\Activitylog\Models\Activity;

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
    public function edit(User $user)
    {
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
        $updatedUser = $user->update($request->validated());

        Session::flash('message', 'De collega is met succes aangepast.');
        Activity::all();

        return redirect()->route('users.show', $user);
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
