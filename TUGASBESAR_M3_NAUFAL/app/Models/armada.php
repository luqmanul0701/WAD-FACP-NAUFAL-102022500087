<?php

// letak file ini
namespace App\Models;

// model adalah class dasar bawaan laravel
// import class agar dapat menggunakan fungsi bawaan 
use Illuminate\Database\Eloquent\Model;


// class armada dapat mewarisi seluruh fungsi yg ada di model
class Armada extends Model
{

    // Menghubungkan model dengan tabel armada di database
    // inisialisasi table armada
    protected $table = 'armada';
    
    // nonaktif fitur timestamp bawaan karena tidak ada kolom yang menyimpan waktu create dan update
    public $timestamps = false;

    // kolom yang akan di isi
    protected $fillable = ['unit', 'nopol', 'merk', 'tahun', 'transmisi'];
}