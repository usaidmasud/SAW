<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\Pegawai;
use DB;

class SawController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        $kriteria = Kriteria::all();

        $norm = $this->normalisasi($pegawai, $kriteria);

        $rank = $this->rank($norm, $kriteria);
        return view('saw/index',[
            'pegawai' => $pegawai,
            'kriteria' => $kriteria,
            'normalisasi' => $norm,
            'ranking' => $rank,
        ]);
    }

    public function normalisasi($pegawai, $kriteria)
    {
        $max = Kriteria::max('bobot');
        $min = Kriteria::min('bobot');
        $norm = array();
        foreach ($pegawai as $item) {
            $temp = array();
            $temp['id'] = $item->id;
            $temp['nama_pegawai'] = $item->nama_pegawai;
            $temp['pendidikan'] = $item->pendidikan / $max;
            $temp['usia'] = $item->usia / $min;
            $temp['pengalaman'] = $item->pengalaman / $min;
            $norm[] = $temp;
        }
        return $norm;
    }

    public function rank($norm, $kriteria)
    {
        $respons = array();
        $kri = ['pendidikan','usia','pengalaman'];
        foreach ($norm as $item) {
            $temp = array();
            $temp['id'] = $item['id'];
            $temp['nama_pegawai'] = $item['nama_pegawai'];
            $jum = 0;
            $i = 0;
            foreach ($kriteria as $k) {
                $jum += $k->bobot * $item[$kri[$i]];
                $i++;
            }
            $temp['ranking'] = $jum;
            $respons[] = $temp;
        }
        return $respons;
    }
    
}
