<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OneController extends Controller{
    public function index_one(){
        return view('one');
    //one.blade.phpを表示
    }
}

?>