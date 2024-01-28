@extends('layers.main')

@section('title', $cliente->nome)

@section('nav')
   Voltar para o ínicio
@endsection

@section('navlink')
   {{ route('users.index')}}
      
@endsection

@section('body')

<body style="background-color:#45474B;">
   <div style="background-color:white;" class="container pb-3">
   

      <h1 class="text-center pt-3 text-decoration-underline">Informação do Cliente</h1>
      <hr>
      @if (session()->has('message'))
      <p class="text-white border border-success bg-success w-50 text-center rounded p-2 mx-auto">{{session()->get('message')}}</p>
          
      @endif
      
         <form 
         action="{{ route('users.update',['user' => $cliente->id]) }}" 
         method="post"
         class="row my-auto">
         @csrf
         <input type="hidden" name="_method" value="PUT">
         
         <div class="row gy-2 gx-3 text-white w-50 mx-auto" style="background-color: #F4CE14">

            
            
               <label class="col-form-label fw-bold text-center" for="nome">Nome</label>
               <input class="form-control text-center" type="text" name="nome" id="nome" value="{{$cliente->nome}}">

            
               <label class="col-form-label fw-bold text-center" for="nome">Telefone</label>
               <input class="form-control text-center" type="text" name="telefone" id="telefone" value="{{$cliente->telefone}}">
         
               <label class="col-form-label fw-bold text-center" for="nome">Carro</label>
               <input class="form-control text-center" type="text" name="carro" id="carro" value="{{$cliente->carro}}">

               <label class="col-form-label fw-bold text-center" for="nome">Placa</label>
               <input class="form-control text-center" type="text" name="placa" id="placa" value="{{$cliente->placa}}">
         
      
         
         <img src="" alt="">
         
         <button type="submit" class="btn btn-success col-12">Editar</button>
         </form>

            <form action=" {{ route('users.destroy',['user' => $cliente->id])}}" method="post">
               @csrf
               <input type="hidden" name="_method" value="DELETE">
               <div class="row text-center">
                  <button class="btn btn-danger col-12 mb-3" type="submit">Excluir</button>
               </div>
            </form>
            </div>
         </div>   
         
         
         
      </div>
   </div>
   <hr>
   <div>
   </div>

</body>

  @endsection

