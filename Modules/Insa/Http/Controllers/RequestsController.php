<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Insa\Entities\Loan;
use App\Element;



class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $elements=Element::find($id);
        return view('insa::SolicitarPrestamo',['elements'=>$elements]);
    }
 /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store()
    {
        Loan::create(request()->all());

        return redirect()->back();

      }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('insa::show');
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
