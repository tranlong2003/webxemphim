<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveController extends Controller
{
    public function infoMove(){
        return view('infor-move');
    }
    public function detailMove(){
        return view('detail-move');
    }
}

