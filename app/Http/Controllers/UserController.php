<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(): View
    {
        $users = User::all();


        /* foreach ($users as $user) {
            dd($user->phones);
        } */

        return view('user.index', compact('users'));
    }
}
