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

        //var_dump($user);
        //var_dump($lixo);

        $lista = $this->lista->where('user_id', $user)->where('lixo_id', $lixo)->get();

        if($lista == null){
            $created = $this->lista->create(['user_id' => $user, 'lixo_id' => $lixo]);

            if($created){
                return redirect()->back()->with('message', 'Successfully created');
            }

            return redirect()->back()->with('message', 'Error created');
        }
        return redirect()->back()->with('message', 'Lixo ja favoritado');

    }

    public function view($user){

        //$lista = $this->lista->all();
        $lista = $this->lista->where('user_id', $user)->join('tblixo', 'list.lixo_id', '=' ,'tblixo.id')->select('list.list_id','tblixo.nome', 'tblixo.tipolixo', 'tblixo.infolixo', 'tblixo.carac', 'tblixo.descarte')->get();
        //var_dump($lista);
        return view('list/viewlist',['lista' => $lista]);
    }

    public function delete($list){
        $deleted = $this->lista->where('list_id', $list)->delete();

        if($deleted){
            return redirect()->back()->with('message', 'Successfully deleted');
        }
        return redirect()->back()->with('message', 'Error deleted');
    }

}


/*

infolixo',
        'carac',
        'descarte
$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
*/
