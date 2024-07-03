@extends('layouts.app')

@section('title', 'listagem de dados')

@section('content')


<table class="table">
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
    <td class="d-flex"></td>
     
   
      </a>
      <div class="d-flex gap-2 align-items-center">
        <a href="{{route("jogos-edit",['id'=>$game->id]) }}" class="btn btn-primary">editar </a>


      </div>
      <form action="{{ route("jogos-destroy", ['id'=>$game->id]) }}" method= "POST">

      @csrf
      @method ('DELETE')
      <button type="submit" class= "btn btn-danger">deletar </button>
      
    </form>
      
      
      
    </td>
    
    </tr>
  @endforeach

 </tbody>
</table>

@endsection
