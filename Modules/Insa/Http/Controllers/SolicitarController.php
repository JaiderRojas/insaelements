<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\People;
use App\Element;
use App\Movement;
use App\Responsability;
use App\Inventory;
use App\MovementDetail;


class SolicitarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
     {
        $peoples = People::all();
        $elements = Element::all();
       //$elements= Element::with('inventories')->select('inventoryCode');

         //creamos una variale donde se va a guardar todos los datos
        $query = trim($request->get('element_id'));
        if ($request) {
        $elements = Element::where('element_name', 'LIKE', '%' . $query . '%')->paginate(1);
         return view('insa::SolicitarPrestamo',['elements'=>$elements, 'element_id' =>$query, 'peoples'=>$peoples] );
        }

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
    */
    public function store(Request $request)
    {
        if (isset($_POST['guardar'])){
            $newMovement = new Movement();
            $newMovement->date = $request->date;
            $newMovement->date_return = $request->date_return;
            $newMovement->dependence = $request->dependence;
            $newMovement->translation = $request->translation;
            $newMovement->objective = $request->objective;
            $newMovement->save();
            $newResponsabilities = new Responsability();
            $newResponsabilities->id_cliente = $request->id_cliente;
            $newResponsabilities->id_usuarios = $request->id_usuarios;

            //$newResponsabilities->id_usuarios = $request->id_usuarios;
            $newResponsabilities->movement_id = $newMovement->id;
            $newResponsabilities->save();


         }


         else if (isset($_POST['save_button'])){
            $newResponsabilities = new Responsability();
            $newResponsabilities->id_usuarios = $request->id_usuarios;

            $movements = DB::table('movements')->orderBy('id','desc')->get();
            $newDetails = new MovementDetail();
            $newDetails->element_id = $request->element_id;
            $newDetails->total = $request->total;
            $newDetails->movement_id = $movements[0]->id;

            $newDetails->save();
        } else {
            echo "";
        }

        return redirect()->back();



    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */



    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable




    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable

    public function edit($id)
    {
        return view('insa::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable

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
