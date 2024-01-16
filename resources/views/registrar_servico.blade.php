@extends('layers.main')

@section('title', 'Registrar Serviço')

@section('nav')
Voltar para o ínicio
@endsection

@section('navlink')
{{route('users.index'   )}}
@endsection



@section('body')

        <a href="{{url()->previous()}}"><i class="fa-solid fa-circle-arrow-left fs-2 bg-success text-light p-2"></i></a>
        <div class="container text-center">
                <h1>Novo serviço</h1>
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <div>
        <form action="{{ route('servicos.store')}}" method="post">
            @csrf

            <label for="novo_servico">Serviço Realizado</label>
            <input type="text" name="novo_servico" id="novo_servico">

            <label for="novo_valor">Valor</label>
            <input type="number" name="novo_valor" id="novo_valor">

            <label for="novo_data">Data do serviço</label>
            <input type="date" name="novo_data" id="novo_data">

            <input type="hidden" name="id_cliente" value="{{$idCliente}}">
            <button type="submit">Registrar</button>
        </form>
    </div>
        </div>
        {{$idCliente}}
        {{-- <a href="{{ route('users.show', {{$cliente->id}})}}">teste</a> --}}

@endsection