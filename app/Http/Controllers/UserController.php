<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function apiIndex()
    {
        $users = User::get();
        return response()->json($users);
    }

    public function list()
    {
        return view('users.list');
    }

    public function react() {
        return view('react');
    }
}
