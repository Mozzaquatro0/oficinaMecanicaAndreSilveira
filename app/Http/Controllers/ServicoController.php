<?php

namespace App\Http\Controllers;

use App\Controllers\ClienteController;
use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public readonly Servico $servico;

    public function __construct()
    {
        $this->servico = new Servico();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idCliente = request('cliente');
        return view('registrar_servico', ['idCliente' => $idCliente]);

        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //$data = Carbon::createFromFormat('d-m-Y H:i:s', $data);

        $created = $this->servico->create([
            'servico' => $request->input('novo_servico'),
            'valor' => $request->input('novo_valor'),
            'data_servico' => $request->input('novo_data'),
            'id_cliente' => $request->input('id_cliente'),
        ]);

        if($created) {
            return redirect()->back()->with('message', 'Serviço Registrado!');
        }
        return redirect()->back()->with('message', 'Erro inexperado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        //
    }
}
