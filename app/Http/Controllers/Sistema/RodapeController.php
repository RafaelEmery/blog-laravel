<?php

namespace App\Http\Controllers\Sistema;

use App\Rodape;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RodapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $rodape = Rodape::first();

        if(!isset($rodape)) {
            return view('sistema.rodape.create')
            ->with('danger', 'Você ainda não possui as informações cadastradas. Por favor, cadastre agora!');
        }

        return view('sistema.rodape.index', compact('rodape'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Rodape::create($dados);

        return redirect(route('sistema.rodape.index'))
        ->with('success', 'O Rodapé foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rodape  $rodape
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rodape = Rodape::find($id);

        //dd($rodape);

        return json_encode($rodape);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rodape  $rodape
     * @return \Illuminate\Http\Response
     */
    public function edit(Rodape $rodape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rodape  $rodape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $dados = $request->all();
        $rodape = Rodape::find($id);
        $rodape->update($dados);

        return redirect()->back()
        ->with('success', 'O Rodapé foi editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rodape  $rodape
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rodape $rodape)
    {
        //
    }
}
