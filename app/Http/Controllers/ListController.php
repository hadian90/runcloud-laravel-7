<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ListController extends Controller
{
    public function index(){
        $data = User::all();
        return view('list',compact(['data']));
    }
}
