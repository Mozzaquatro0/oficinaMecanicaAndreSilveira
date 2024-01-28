@extends('layers.main')
@section('title', 'Editar Serviço')

@section('body')
<body style="background-color:#45474B">
    <div class="container bg-white text-center w-100 mt-3 pb-3 rounded">

        
        <h1 class="pt-3">Editar Serviço</h1>
        @if (session()->has('message'))
        <p class="text-white border border-success bg-success w-50 text-center rounded p-2 mx-auto">{{session()->get('message')}}</p>
            
        @endif
        <form 
         action="{{ route('servicos.update',['servico' => $servico->id]) }}" 
         method="post"
         class="row my-auto">
         @csrf
         <input type="hidden" name="_method" value="PUT">
         
         <div class="row text-white w-50 mx-auto rounded " style="background-color: #F4CE14">

            
            
               <label class="col-form-label fw-bold text-center" for="servico">Serviço Realizado</label>
               <input class="form-control text-center" type="text" name="servico" id="servico" value="{{$servico->servico}}">

            
               <label class="col-form-label fw-bold text-center" for="valor">Valor</label>
               <input class="form-control text-center" type="text" name="valor" id="valor" value="{{$servico->valor}}">
         
               <label class="col-form-label fw-bold text-center" for="data_servico">Data</label>
               <input class="form-control text-center" type="text" name="data_servico" id="data_servico" value="{{$servico->data_servico}}">

                        
         <button type="submit" class="btn btn-success col-12 mb-3">Editar</button>
         </form>
    </div>
    
</body>
@endsection