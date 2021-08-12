<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Responsability;
use App\People;
class AuthorizaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)

    {
        $responsabilities = Responsability::orderBy("id", "DESC")->paginate(3);

        $peoples = People::all();


        $query = trim($request->get('people_id'));
        if ($request) {
        $peoples = People::where('name', 'LIKE', '%' . $query . '%')->paginate(2);

         return view('insa::AutorizaSolicitud',['peoples'=>$peoples, 'people_id' =>$query,]);
        }






        //return view('insa::AutorizaSolicitud');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('insa::create');
    }

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
    public function show($id)
    {
        
        
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
