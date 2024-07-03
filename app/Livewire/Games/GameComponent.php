<?php

namespace App\Livewire\Games;

use App\Models\jogo;
use Livewire\Component;

class GameComponent extends Component
{
    public $searcher;
    public function render()
    {
        return view('livewire.games.game-component',[
            'games' =>$this->getGames()
        ])->layout('layouts.games.app');
       
    }

    public function getGames (){
        if(empty($this->searcher)){

            return jogo::all();
        }else{
            return  jogo::where("nome","like","%".$this->searcher."%")->get();
           

        }
      }
}
