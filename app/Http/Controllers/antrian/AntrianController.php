<?php

namespace App\Http\Controllers\antrian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(){
        return view('antrian/antrian_1');
    }
}
