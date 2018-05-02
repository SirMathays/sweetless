<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getUser()
    {
        $user = User::select('id', 'name', 'email')->streak()->find(Auth::id());

        return response([
            'user' => $user
        ], 200);
    }

    /**
     * Description
     *
     * @return Illuminate\Http\Response
     */
    public function frontPage()
    {
        $users = User::select('id', 'name', 'created_at')->streak()->get();

        return response([
            'topList' => $users
        ], 200);
    }
}
