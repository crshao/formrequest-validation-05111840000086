<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;

class HomeController extends Controller
{
    public function create()
    {
        return view('createUser');
    }

    public function store(StoreUser $request)
    {
        $input = $request->all();
        $user = User::create($input);

        return back()->with('success', 'User created successfully');
    }
}
