<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            "name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "organisation" => $request->input('email')
        ]);

        if ($user) {
            $user->assignRole($request->role);
        }
        return redirect('/user');
    }

    public function show($id)
    {
        $roles = Role::all();
        $user = User::where('id', $id)->first();
        return view('admin.user.view', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update([
            "name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "email" => $request->input('email'),
            "organisation" => $request->input('email')
            
        ]);

        if ($user) {
            $xxx = User::where('id', $id)->first();
            $xxx->syncRoles([$request->role]);
        }

        return redirect('/user/view/'. $id);
    }

    public function destroy($id)
    {
      $user = User::where('id', $id)->delete();
      return redirect('/user');
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }
}
