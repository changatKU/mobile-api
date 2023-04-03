<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->phone = $request->get('phone');
        $user->password = $request->get('password');
        $user->save();
        return User::where('phone', $user->phone)->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $phone)
    {
        $user = User::where('phone', $phone)->get();
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
