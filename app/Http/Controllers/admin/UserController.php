<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10); // Paginate or use ->get() for all users
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $page = request()->query('page', 1);
        return redirect()->route('admin.user.index', [
            'id' => $user->id,
            'page' => $page,
            'user' => $user
        ])->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        config(['app.name' =>  $user->name]);

        $page = request()->query('page', 1);
        return view('admin.users.show', [
            'id' => $user->id,
            'page' => $page,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        $page = request()->query('page', 1);
        return view('admin.users.edit', [
            'id' => $user->id,
            'page' => $page,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'role' => $request->input('role'),
            'email' => $request->input('email'),
        ]);

        $page = $request->input('page', 1);

        return redirect()->route('admin.user.show', [
            'id' => $user->id,
            'page' => $page,
            'user' => $user
        ])->with('success', 'User updated successfully.');
        // return view(['admin.user.edit', $user->id], compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}
