<?php

namespace App\Http\Controllers\soal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class soalController extends Controller
{
    public function index(){
        return view('master/tambahsoal');
    }

    public function soal(){
        return view('master/soal');
    }

    public function soal2view(){

        return view('master/soal2');
    }

    public function soal2(){
        // $soals = DB::table('m_ujian_soal')->paginate(1);
        // $data['soal1'] = DB::table('m_ujian_soal')->get();
        $data['soal1'] = DB::table('m_ujian_soal');
        // $data['soal1'] = DB::select('select * from m_ujian_soal');
        
        // var_dump($soals);

        return view('master.soal2', $data);

    }

    public function soal3(){
        // $soals = DB::table('m_ujian_soal')->paginate(1);
        // $soal3 = DB::select('select * from m_ujian_soal');
        $data['soal1']= DB::table('m_ujian_soal')->get();
        
        // dd($data);
        // return false;

        echo json_encode($data['soal1']);
        
    }


}
