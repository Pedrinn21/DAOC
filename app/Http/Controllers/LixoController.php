<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tblixo;

class LixoController extends Controller
{
    public readonly tblixo $lixo;


    public function __construct(){
        $this->lixo = new tblixo();
    }

    public function search(){

        $search = request('search');
        //var_dump($search);

        if($search != null){
            

            $lixo = $this->lixo->where('nome','like', '%'.$search.'%')->first();
            //var_dump($lixo);
            //var_dump($search);
            return view('lixo/homelixo',['lixo' => $lixo]);
        }else{
            return redirect()->back()->with('message', 'Nenhuma informação encontrada');
        }
    }

    public function view(){
        $lixos = $this->lixo->get();

        return view('home/index',['lixos' => $lixos]); 
    }


}
