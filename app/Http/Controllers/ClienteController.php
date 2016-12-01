<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;
use Laracasts\Flash\Flash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $cliente = Cliente::orderBy ('ID','ASC')->paginate(5);
        return view('clientes.index')->with('clientes',$cliente); //primero la vista y luego la variable
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cliente = new Cliente( $request ->all());
        $cliente->CI = $request->numero;
        $cliente->NOMBRE = $request->nombre;
        $cliente->TELEFONO = $request->telefono;
        $cliente->CORREO = $request->email;
        $cliente->save();
       // dd ('Cliente Creado Satisfactoriamente!!');
        Flash::success("Se ha registrado: " . $cliente->NOMBRE . " de forma Exitosa !");
        return redirect()->route('clientes.index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
