<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
 public function dataSiswa(){
    $siswa1 = 'Atan'; $asal1 = 'Jakarta';
    $siswa2 = 'Bagus'; $asal2 = 'Depok';
    return view ('data_siswa',
    compact('siswa1','siswa2','asal1','asal2')
);
 }
    //
}
