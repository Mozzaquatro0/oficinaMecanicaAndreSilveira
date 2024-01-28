@extends('layers.main')
@section('title', 'Inicio')


@section('nav')
Novo Cliente
@endsection

@section('navlink')
{{route('users.create')}} 
@endsection

<body style="background-color:#45474B">
  

@section('body')

<div style="background-color: white; border-radius:13px" class="container pb-3 ">


<div class="mt-3 text-end me-3 pt-3">
  <form action="{{route ('users.index')}}" method="GET">
    <input type="text" name="pesquisa" id="pesquisa" placeholder="nome/placa" value="{{old('pesquisa')}}">
    <button class="btn btn-dark">Pesquisar</button>
  </form>
</div>

@if(@isset($pesquisa))
<h1 class="text-center">Encontramos os seguintes resultados com <span class="fw-bold">"{{$pesquisa}}"</span></h1>

    
@endisset
<div class="row ">
@foreach ($filtros as $filtro)
<div class="col-3">
<div class="space-between ms-3 text-center border border-warning">
  <div class="">
    <div class="text-center">
      <ul class="mt-3">
        <li> <h5>{{$filtro->nome}}</h5></li>
        <li> <p>{{$filtro->placa}}</p></li>
        <li> <p>{{$filtro->carro}}</p></li>
      </ul>

      <li class="text-center bg-warning">
        <a class="link-underline-warning" href="{{ route ('users.show', ['user' => $filtro->id])}}">
          {{-- <i class="fa-regular fa-eye text-success "></i> --}}
          <button class="btn btn-light fw-bold col-5 me-2">Ver</button>
        </a>
        <a href="{{ route('users.edit',['user' => $filtro->id])}}">
          {{-- <i class="fa-solid fa-user-pen text-success"></i>  --}}
          <button class="btn btn-light fw-bold col-5 mt-2 mb-2">Editar</button>
        </a>
      </li>
    </div>
  </div>
</div>
</div>
@endforeach
</div>
<hr>

<div class="row">
  
@foreach ($clientes as $cliente)
<div class="col-3 pe-3">
    <div class="card space-between mt-3 ms-3 " style="width: 18rem;">

      <ul class="list-group list-group-flush text-center p-3 border border-warning">
        <h5 class="card-title text-center">{{$cliente->nome}}</h5>
        <p class="card-text text-center">{{$cliente->placa}}</p>      
        <p class="card-text text-center">{{$cliente->carro}}</p>      
      </ul>
      
      <ul class="list-group list-group-flush text-center ">
        <li class="list-group-item bg-warning">
          <a class="link-underline-warning me-2" href="{{ route('users.show',['user' => $cliente->id])}}">
              {{-- <i class="fa-regular fa-eye text-success"></i>  --}}
              <button class="btn btn-light fw-bold col-5">Ver</button>
          </a>

          <a class="col-" href="{{ route('users.edit',['user' => $cliente->id])}}">
              {{-- <i class="fa-solid fa-user-pen text-success"></i>  --}}
              <button class="btn btn-light fw-bold col-5">Editar</button>

          </a>
        </li>
      </ul>
    </div>
  </div>  
@endforeach

  
</div>

</div>
@endsection
</body>