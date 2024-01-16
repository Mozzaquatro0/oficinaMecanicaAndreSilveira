@extends('layers.main')

@section('title', 'Registrar um novo cliente')
    
@section('nav')
Inicio
@endsection

@section('navlink')
{{ route('users.index')}}
@endsection

@section('body')
<body style="background-color:#8fa2a6">
    

    <div style="background-color:white; border-radius:13px" class="container">
        <h1 class="text-center pt-3">Novo Cliente</h1>
        @if(session()->has('message'))
            {{session()->get('message')}}
        @endif
        
        <div class="container pb-3 row g-3">
            
            <form action="{{ route('users.store')}}" method="post">
                @csrf

                <label class="form-label" for="novo_nome">Nome do Cliente</label>
                <input class="form-control" type="text" name="novo_nome" id="novo_nome">

                <label class="form-label" for="novo_telefone">Telefone</label>
                <input class="form-control" type="text" name="novo_telefone" id="novo_telefone">

                <label class="form-label" for="novo_carro">Carro</label>
                <input class="form-control" type="text" name="novo_carro" id="novo_carro">

                <label class="form-label" for="novo_placa">Placa</label>
                <input class="form-control" type="text" name="novo_placa" id="novo_placa">

                <button class="btn btn-warning mt-3" type="submit">Registrar</button>
            </form>
        </div>

    </div>
</body>    
@endsection