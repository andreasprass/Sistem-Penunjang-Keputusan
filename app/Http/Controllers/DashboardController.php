<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Division;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.users',[
            "users" => User::all(),
            "departs" => Department::all(),
            "divs" => Division::all(),
            "positions" => Position::all()
            // "division" => Division::all(),
        ]);
    }

    // Position
    public function position_view(){
        return view('dashboard.positions',[
            "users" => User::all(),
            "departs" => Department::all(),
            "divs" => Division::all(),
            "positions" => Position::all()
            // "division" => Division::all(),
        ]);
    }

    public function add_position(Request $request){

        $data = $request->all();
        Position::create($data);
        return redirect()->route('position');
    }
}
