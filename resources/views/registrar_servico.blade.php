@extends('layers.main')

@section('title', 'Registrar Serviço')

@section('nav')
    Voltar para o ínicio
@endsection

@section('navlink')
    {{ route('users.index') }}
@endsection



@section('body')

    <body style="background-color:#45474B">
        <div class="container bg-white mt-3 rounded">

            <a href="../users/{{ $idCliente }}"><i
                    class=" rounded fa-solid fa-circle-arrow-left fs-2 bg-success text-light p-2 mt-2"></i></a>
            <div class="container text-center">
                <h1 class="text-decoration-underline">Novo serviço</h1>
                <hr>
                @if (session()->has('message'))
                    <h5 class="w-100 bg-success text-white text-center">{{ session()->get('message') }}</h5>
                @endif
                <div class="w-50 mx-auto rounded border border-warning m-3 p-3" style="background-color: #F4CE14">
                    <form action="{{ route('servicos.store') }}" method="post">
                        @csrf

                        <label class="col-form-label fw-bold text-white" for="novo_servico">Serviço Realizado</label>
                        <input class="form-control text-center border border-warning-subtle" type="text"
                            name="novo_servico" id="novo_servico">

                        <label class="col-form-label fw-bold text-white" for="novo_valor">Valor</label>
                        <input class="form-control text-center border border-warning-subtle" type="number"
                            name="novo_valor" id="novo_valor">

                        <label class="col-form-label fw-bold text-white" for="novo_data">Data do serviço</label>
                        <input class="form-control text-center border border-warning-subtle" type="date" name="novo_data"
                            id="novo_data">

                        <input type="hidden" name="id_cliente" value="{{ $idCliente }}">
                        <button type="submit" class="btn btn-success w-100 mt-3 mb-3">Registrar</button>
                    </form>
                </div>
            </div>
            {{-- {{$idCliente}}
            <a href="{{ route('users.show', {{$cliente->id}})}}">teste</a> --}}
        </div>
    </body>
@endsection
