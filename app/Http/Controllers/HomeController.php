<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Description
     *
     * @return Illuminate\Http\Response
     */
    public function getUsers()
    {
        $users = User::select('id', 'name')->with(['fail' => function ($query) {
            $query->select('id', 'user_id', 'failed_at');
        }])->get();

        return response([
            'users' => $users
        ], 200);
    }
}
