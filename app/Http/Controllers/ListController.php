<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function homelist(){
        return view(view:'homelist');
    }
}
