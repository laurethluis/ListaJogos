@extends('layouts.app')

@section('title', 'formulario para adicionar os dados')

@section('content')

<div class="container mt-5">

<h1>Crie um novo jogo </h1>

<hr>

<div class="col-md-8">
    <form action="{{route ('jogos-store')}}" method="POST">
        @csrf
    
    
        <div class="form-group">
       
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">

        </div>
      
       
        <div class="form-group">

            <label for="nome">Categoria:</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo...">
        </div>
       
    
        
       
        <div class= "form-group">

            <label for="ano_criacao">Ano de criação:</label>
           
            <input type="number" class="form-control" name="ano_criacao" placeholder="Ano de criação...">
        
        </div>
       
    
        <div class="form-group">

            <label for="valor">Valor:</label>
           
            <input type="number" class="form-control" name="valor" placeholder="Digite um Valor...">
        <div> 

            @session("text") 
            <div id="alert" class="col-md-12 alert alert-success text-center">
               {{session("text")}}
            </div>
            @endsession
        

        
        <div class="d-flex align-items-center form-group mt-2 gap-2">

            <input type="submit"  class= "btn btn-primary" value="Salvar" >
            <a class="btn btn-success" href="{{route('show.games')}}">Lista de jogo </a>
        </div>

    
    </form>

</div>

</div>

@endsection

@push('main.js')
<script src="{{asset('js/main.js')}}"></script>
@endpush

   