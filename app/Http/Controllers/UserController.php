<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'Admin',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create', [
            'title' => 'Admin | Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/dashboard/user')->with('success', 'Admin baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.user.edit', [
            'title' => 'Admin | Edit',
            'user' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $users = User::find($id);

        $rules = [
            'name' => 'required|min:5',
            'password'

        ];

        if ($request->username != $users->username) {
            $rules['username'] = 'required|unique:users|min:5';
        }

        if ($request->email != $users->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validateData = $request->validate($rules);

        if (!$request->input('password')) {
            $validateData['password'] = $request->input('oldPassword');
        } else {
            $validateData['password'] = bcrypt($request->input('password'));
        }


        User::where('id', $id)->update($validateData);

        return redirect('/dashboard/user')->with('success', 'Admin berhasil diperbarui');
        // dd($validateData);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/dashboard/user')->with('success', 'Admin lama berhasil dihapus!');
    }
}
