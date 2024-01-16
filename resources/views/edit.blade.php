@extends('layers.main')

@section('title', $cliente->nome)

@section('nav')
   Voltar para o ínicio
@endsection

@section('navlink')
   {{ route('users.index')}}
      
@endsection

@section('body')

<body style="background-color:#8fa2a6;">
   <div style="background-color:white;" class="container"></div>
   

      <h1 class="text-center">Informação do Cliente</h1>

      @if (session()->has('message'))
      {{session()->get('message')}}
          
      @endif
      <div class="container ">
         <form 
         action="{{ route('users.update',['user' => $cliente->id]) }}" 
         method="post"
         class="row my-auto bg-secondary">
         @csrf
         <input type="hidden" name="_method" value="PUT">
         
         <div class="row gy-2 gx-3 text-white">

            
            
               <label class="col-form-label" for="nome">Nome</label>
               <input class="form-control" type="text" name="nome" id="nome" value="{{$cliente->nome}}">

            
               <label class="col-form-label" for="nome">Telefone</label>
               <input class="form-control" type="text" name="telefone" id="telefone" value="{{$cliente->telefone}}">
         
               <label class="col-form-label" for="nome">Carro</label>
               <input class="form-control" type="text" name="carro" id="carro" value="{{$cliente->carro}}">

               <label class="col-form-label" for="nome">Placa</label>
               <input class="form-control" type="text" name="placa" id="placa" value="{{$cliente->placa}}">
         </div>
      </div>
         
         
         
         <button type="submit" class="btn btn-success col-12">Editar</button>
         </form>

            <form action=" {{ route('users.destroy',['user' => $cliente->id])}}" method="post">
               @csrf
               <input type="hidden" name="_method" value="DELETE">
               <div class="row text-center">
                  <button class="btn btn-danger col-12" type="submit">Excluir</button>
               </div>
            </form>
            </div>
         
         
         
      </div>
   </div>
   <hr>
   <div>

</body>

  @endsection

