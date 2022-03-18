<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\User;

class TestController extends BaseController
{
    public function index(){

        $users = User::all();

        return view('welcome')->with('users', $users);
    }
}
