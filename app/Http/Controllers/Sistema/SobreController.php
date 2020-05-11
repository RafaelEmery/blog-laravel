<?php

namespace App\Http\Controllers\Sistema;

use App\Models\Sobre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sobre = Sobre::first();

        if(!isset($sobre)) {
            return redirect(route('sistema.sobre.create'))->with('danger', 'Você ainda não possui as informações cadastradas. Por favor, cadastre agora!');
        }

        return view('sistema.sobre.index', compact('sobre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema.sobre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Sobre::create($dados);

        return redirect(route('sistema.sobre.index'))
        ->with('success', 'O Sobre foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sobre = Sobre::find($id);

        //dd($sobre);

        return json_encode($sobre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function edit(sobre $sobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $dados = $request->all();
        $sobre = Sobre::find($id);
        $sobre->update($dados);

        return redirect()->back()
        ->with('success', 'O Rodapé foi editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(sobre $sobre)
    {
        //
    }
}
