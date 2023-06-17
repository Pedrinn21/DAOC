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

        if($search){
            

            $lixo = $this->lixo->where('nome', $search)->first();
            //var_dump($lixo);
            //var_dump($search);
        }else{
            $lixo = $this->lixo->all();
        }

        return view('lixo/homelixo',['lixo' => $lixo]);

    }
}
