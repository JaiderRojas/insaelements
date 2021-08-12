<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accountant;

class SearchController extends Controller
{
   public function index(Request $request){
        $term = $request->get('term');
        $querys = accountant::where('nombre', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query) {
            $data[] =[
                'label' => $query->nombre
            ];
        }
        return $data;
    }
}