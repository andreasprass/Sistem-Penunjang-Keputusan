<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Position;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_divs($id){
        $html = '';
        $divisions = Division::where('department_id',$id)->get();
        // return response()->json($divisions);

        foreach($divisions as $div){
            $html .= '<option value="'.$div->id.'">'.$div->name_div.'</option>';
        }

        return response()->json($html);
    }

    // public function get_position($id){
    //     $html = '';
    //     $positions = Position::where('division_id',$id)->get();
    //     // return response()->json($divisions);

    //     foreach($positions as $pos){
    //         $html = '<option value="'.$pos->id.'">'.$pos->name_pos.'</option>';
    //     }

    //     return response()->json($html);
    // }
}
