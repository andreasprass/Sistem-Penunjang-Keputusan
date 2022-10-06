<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.users',[
            "users" => User::all(),
            "positions" => Position::all(),
            // "division" => Division::all(),
        ]);
    }
}
