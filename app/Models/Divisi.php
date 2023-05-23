<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi'; //pemanggilan table
    protected $primaryKey = 'id'; //pemanggilan id
    protected $fillable = ['nama']; //pemanggilan kolom

    public function pegawai(){
        return $this->hasMany(Pegawai::class);//memanggil relasi antara table divisi dengan table pegawai
    }

}
