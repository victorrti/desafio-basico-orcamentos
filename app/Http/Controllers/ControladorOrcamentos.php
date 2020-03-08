<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orcamentos;

use Carbon\Carbon;

class ControladorOrcamentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

     public function getOrcamentosData(Request $request){
        $datestart = $request->input('start');
        $dateend = $request->input('end');
        $cliente =$request->input('cliented');

        $results = orcamentos::whereBetween('created_at', array($datestart, $dateend))->get();




        return View('pesquisar',compact('results'));

     }

     public function getOrcamentosCliente(Request $request){
        $cliente = $request->input('cliente');
        $results = orcamentos::where('cliente',$cliente)->get();






        return View('pesquisar',compact('results'));

     }

     public function getOrcamentosVendedor(Request $request){
        $vendedor = $request->input('vendedor');
        $results = orcamentos::where('cliente',$vendedor)->get();


        return View('pesquisar',compact('results'));

     }

    public function index()

    {
        $orcs= orcamentos::all();
        return View('orcamentos',compact('orcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return View('novoOrcamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orc = new orcamentos();
        $orc->cliente = $request ->input('cliente');
        $orc->vendedor = $request ->input('vendedor');
        $orc->valorOrcado = $request ->input('valorOrcado');
        $orc->descricao = $request ->input('descricao');
        $orc->save();
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
