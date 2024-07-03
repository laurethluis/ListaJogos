@section('title', 'listagem de dados')

<div>

<div class="col-md-10 mt-3 container">
<div class="input-group mb-3">
  <input wire:model.live="searcher" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
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
   
    @if (isset($games))
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
    @else
    <tr>
        <td colspan="9">
            <div class="text-center alert alert-warning">
                <p>
                    Nenhum jogo encontrado
                </p>
            </div>
        </td>
    </tr>   
    @endif
  
   </tbody>
  </table>
</div>
</div>
