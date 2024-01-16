<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Arr;

class ClienteController extends Controller
{

    public readonly Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pesquisa=$request->pesquisa;
            $filtro=[];
        if($pesquisa){
            $filtro=Cliente::where( function ($query) use ($pesquisa)  {
                if($pesquisa) {
                    $query->where('nome', 'LIKE', "%$pesquisa%");
                    $query->orWhere('placa','LIKE', "%{$pesquisa}%");
                }
            })->get();
        }
        $clientes = $this->cliente->all();
        

        return view('welcome', ['clientes' => $clientes, 'filtros' =>$filtro, 'pesquisa'=>$pesquisa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrar_cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->cliente->create([
            'nome' => $request->input('novo_nome'),
            'telefone' => $request->input('novo_telefone'),
            'carro' => $request->input('novo_carro'),
            'placa' => $request->input('novo_placa'),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Cliente Registrado!');
        }
        return redirect()->back()->with('message', 'Erro inexperado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $user, Request $request)
    {
        $cliente = $user;
        $servicoCliente= Servico::where('id_cliente', $cliente->id)->get()->toArray();
        $data1=Servico::distinct()->where('id_cliente',$cliente->id)->selectRaw('substr(data_servico,1,4) as data_servico')->orderBy('data_servico','desc')->get();
        $data=Servico::distinct()->selectRaw('substr(data_servico,1,4) as data_servico')->orderBy('data_servico','desc')->get();
        // dd($data);
        // dd($filtro=Servico::where('id_cliente',$cliente->id)->get());
          if($request->filtro!= 'todos'){
            $filtro=Servico::where('id_cliente',$cliente->id)->whereYear('data_servico',date("{$request->filtro}"))->get()->toArray();
          }else($filtro=Servico::where('id_cliente',$cliente->id)->get()
        );


        return view('user_show',['cliente'=>$cliente , 'idServicos'=>$servicoCliente,'filtros'=>$filtro, 'datas'=>$data1]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $user)
    {
        return view('edit', ['cliente' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = $this->cliente->where('id', $id)->update($request->except(
            ['_token', '_method']
        ));

        if ($update) {
            return redirect()->back()->with('message','Alterado com sucesso!');
        }
        return redirect()->back()->with('message','Algo inexperado ocorreu!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->cliente->where('id', $id)->delete();
        return redirect()->route('users.index');
    }

    public function filtrar(Request $request)
    {
        $cliente = $this->cliente;
        
    }
}
