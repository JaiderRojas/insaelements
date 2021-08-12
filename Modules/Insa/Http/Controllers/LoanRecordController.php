<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Movement;
use App\Responsability;
use App\People;
use App\Element;
use App\Inventory;
use App\MovementDetail;

class LoanRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //   $responsabilities = Responsability::with('movements')->get();
        //   $peoples = People::all();
        //   //solo uno ->pluck('nombre')->get();
        // $query = trim($request->get('people_id'));
        // if ($request) {
        // $people = People::where('name', 'LIKE', '%' . $query . '%')->paginate(2);
        //,['people'=>$people, 'peoples'=>$peoples, 'people_id' =>$query, 'responsabilities' =>$responsabilities]);
        // }
        $nombre="a";
        $people = People::where('name', 'LIKE', '%' . $nombre . '%')->first();
        $id=$people->id;
        $responsability = Responsability::where('id_cliente', 'LIKE', '%' . $id . '%')->first();
        $movement_id = $responsability->movement_id;
        $movement = Movement::where('id', 'LIKE', '%' . $movement_id . '%')->first();
        $movement_details=$movement->movement_details;
        return view('insa::RegistroPrestamo',
         ['responsability'=>$responsability,
         'people'=> $people,
        'movement'=>$movement,
        'movement_details'=>$movement_details]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable


    */


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(request $request)
    {

        $nombre=$request->nombre;
        $people = People::where('name', 'LIKE', '%' . $nombre . '%')->first();
        if ($people==null) {
            $nombre="a";
        $people = People::where('name', 'LIKE', '%' . $nombre . '%')->first();
        $id=$people->id;
        $responsability = Responsability::where('id_cliente', 'LIKE', '%' . $id . '%')->first();
        $movement_id = $responsability->movement_id;
        $movement = Movement::where('id', 'LIKE', '%' . $movement_id . '%')->first();
        $movement_details=$movement->movement_details;
        return view('insa::RegistroPrestamo', [
            'responsability'=>$responsability,
            'people'=> $people,
             'movement'=>$movement,
             'movement_details'=>$movement_details]);
        }
        $id=$people->id;
        $responsability = Responsability::where('id_cliente', 'LIKE', '%' . $id . '%')->first();
        $movement_id = $responsability->movement_id;
        $movement = Movement::where('id', 'LIKE', '%' . $movement_id . '%')->first();
        $movement_details=$movement->movement_details;
        return view('insa::/RegistroPrestamo',
        ['responsability'=>$responsability,
         'people'=> $people,
         'movement'=>$movement,
          'movement_details'=>$movement_details]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('insa::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
