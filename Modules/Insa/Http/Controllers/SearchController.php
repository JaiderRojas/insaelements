<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Element;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function search(Request $request){
        $term = $request->get('term');
        $querys = Element::where('element_name', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query) {
            $data[] =[
                'label' => $query->element_name
            ];
        }
        return $data;
    }
}

