@extends('layouts.app')

@section('title', 'listagem de dados')

@section('content')

<div class="col-md-10 mt-3 container">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  <span class="input-group-text" id="basic-addon1">pesquisar</span>
</div>
</div>

<div class="table-responsive mt-3">

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">Nome do Jogo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Criação</th>
        <th scope="col">Valor</th>
        <th>opções</th>
      </tr>
    </thead>
   <tbody>
    @foreach ($games as $game )
    
    <tr>
      <td>{{$game->nome}}</td>
      <td>{{$game->categoria}}</td>
      <td>{{$game->ano_criacao}}</td>
      <td>{{$game->valor}}</td>
     
      <td>
  
        <div class="d-flex gap-2 align-items-center">
          </a>
          <a href="{{route("jogos-edit",['id'=>$game->id]) }}" class="btn btn-primary">editar </a>
      
          <form action="{{ route("jogos-destroy", ['id'=>$game->id]) }}" method= "POST">
        
          @csrf
         
          <a href="{{route('jogos-destroy',$game->id)}}" class= "btn btn-danger">deletar </a>
       
      
        </div>
  
      </td>
       
     
        
        
        
        
      </td>
      
      </tr>
    @endforeach
  
   </tbody>
  </table>
</div>



@endsection
