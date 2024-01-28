

@extends('layers.main')

@section('title', $cliente->nome)

@section('nav')
Voltar para o ínicio
@endsection

@section('navlink')
{{route('users.index'   )}}
@endsection


@section('body')

<body style="background-color:#45474B;">
    

<div style="background-color:white; border-radius:13px" class="container mt-3 pt-3">

    
    
    <div class="row text-center">
        <div class="row justify-content-md-center text-decoration-underline"><h1>INFORMAÇÃO DO CLIENTE</h1></div>
        <div class="ms-3 col-sm-2 border">
            logo car
        </div>
        <div class="col ">
            <h1>NOME</h1>
            <label for="">{{$cliente->nome}}</label>
            <h1>TELEFONE</h1>
            <label for="">{{$cliente->telefone}}</label>
        </div>
        <div class="col">
            <h1>CARRO</h1>
            <label for="">{{$cliente->carro}}</label>
            <h1>PLACA</h1>
            <label for="">{{$cliente->placa}}</label>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="row ">
            <div class="col text-start">
                <button type="submit" class="pt-2 pb-2 btn btn-success col ">
                    <a href="{{ route('servicos.create',['cliente' => $cliente->id])}}" class="text-white link-underline-success">Adicionar Serviço</a>
                    
                </button>
            </div>

            <div class="col  text-end  pt-3">
                <label class=" col fw-bold" for="ano">Filtrar por ano</label>

            </div>

            <div class="col text-center mb-3 ">
                <div class="row">
                    <div class="col-9">
                        <form action="{{route ('users.show',['user' => $cliente->id])}}" method="GET">
                            <select class="form-select mt-2 col-sm-3" size="1" name="filtro" id="filtro" wire:model="type">
                                <option value="todos" selected>Todos</option>
                                @foreach($datas as $data)
                                <option value="{{ $data['data_servico'] }}">{{ $data['data_servico'] }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="col text-end">
                            <button class="btn btn-success mt-2">Filtrar</button>
                        </form>
                    </div>
                </div>
                
                   
            </div>
        </div>

        @if(session()->has('message'))
        <h5 class="w-100 bg-success text-white ms-3 me-3 text-center">{{session()->get('message')}}</h5>
        @endif
        <div class="row">
            <div class="col">
                <table class="table table-warning table-striped-row table-bordered border-warning">
                    <thead>
                        <tr class="text-center">
                            <th class="scope col">#</th>
                            <th class="scope col">Serviço Realizado</th>
                            <th class="scope col">Valor</th>
                            <th class="scope col">Realizado em</th>
                            <th class="scope col">Editar/Excluir</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                            <?php $num = 0 ?>
                            @foreach($filtros as $filtro)
                        <tr>
                            <?php $num+= 1 ?>
                            <td scope="row"> {{$num}} </td>
                            <td scope="row">{{$filtro['servico']}}</td>
                            <td scope="row">{{$filtro['valor']}}</td>
                            <td scope="row">{{ date('d \d\e F \d\e Y', strtotime($filtro['data_servico']))}}</td>
                            <td scope="row" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-success me-3 ps-3 pe-3">
                                        <a href="{{route ('servicos.show', ['servico' => $filtro->id,])}}" class="text-white" style="text-decoration:none">EDITAR</a>
                                    </button>
                                    
                                    <form action=" {{ route('servicos.destroy',['servico' => $filtro->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger ps-3 pe-3 fw-bold" type="submit">EXCLUIR</button>
                                    </form>
                                </div>
                                
                            @endforeach
                        </tr>
                    </tbody>
                    <tbody>
                           
                            <?php $soma = 0 ?>
                           @foreach($filtros as $servico)
                            <?php $soma += $servico['valor']?>
                           @endforeach
                           
                            
                    
                        <th scope="row" colspan="5" class="text-end text-success">Valor TOTAL: {{$soma}}
                            
                            
                            
                        </th>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>
</body>
@endsection
