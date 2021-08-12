<?php

namespace Modules\Insa\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Routing\Controller;
use Modules\Insa\Entities\Loan;


class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function PDF()

    {  
       



/*
         $prestamos = \DB::table('loans')
          select(['id', 'loan_date', 'delivery_date', 'dependencies', 'translation', 'objetive']); 
          get();
         $vista = view::make('insa::prueba', compact('prestamos'))->render();

         $pdf =  \App::make('dompdf.wrapper');
         $pdf->loadHTML($vista);

          return $pdf->stream('Solicitud_Prestamo.pdf');

          //$pdf =\PDF::loadView('insa::prueba', compact('prestamos'));
          //return $pdf->stream();*/

         
    }

    public function show()
    {
       // $prestamo = Loan::find($id);
       // return view('insa::show', compact('prestamo'));
        return view('insa::show');
    
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
