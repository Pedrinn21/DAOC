<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lista;

class ListController extends Controller
{

    public readonly Lista $lista;


    public function __construct(){
        $this->lista = new Lista();
    }


    public function homelist(){
        return view(view:'list/homelist');
    }

    public function create($user, $lixo){

        var_dump($user);
        var_dump($lixo);
        $created = $this->lista->create(['user_id' => $user, 'lixo_id' => $lixo]);

        if($created){
            return redirect()->back()->with('message', 'Successfully created');
        }

        return redirect()->back()->with('message', 'Error created');

    }

    public function view($user){

        //$lista = $this->lista->all();
        $lista = $this->lista->where('user_id', $user)->join('tblixo', 'list.lixo_id', '=' ,'tblixo.id')->select('tblixo.nome')->get();
        //var_dump($lista);
        return view('list/viewlist',['lista' => $lista]);
    }
}


/*
$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
*/
