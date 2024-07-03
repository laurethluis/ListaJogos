<?php

namespace App\Http\Controllers;

use App\Models\jogo As Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        //dd('Olá Mundo');

        $jogos = jogo::all();
        //dd($jogos);

    return view('jogos.index',['jogos'=>$jogos]);

    }

    public function create()
    {
        return view('jogos.create');
    }
public function store(Request $request)

{
  try {
   \DB::beginTransaction();
    Jogo::create($request->all());
    \DB::commit();
    return redirect()->back()->with('text','o jogo foi registrado com sucesso!');

  } catch (\Throwable $th) {
    dd($th->getMessage());
    \DB::rollback();   
  }
}

  public function show(){
    return view("jogos.tabelas.lista-jogos",["games"=>$this->getGames( )]);
  }
  public function getGames (){
    return Jogo::all();
  }

  public function edit($id)
  {
    $jogos=Jogo::where("id",$id)->first();
    dd($jogos);
  }

  public function destroy($id)
  {   
    Jogo::where('id',$id)->delete();
    return redirect()->back();
   
  }


}






