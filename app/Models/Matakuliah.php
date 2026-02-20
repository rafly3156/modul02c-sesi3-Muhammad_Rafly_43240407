<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    // Nama tabel di database [cite: 115]
    protected $table = 'matakuliahs';

    // Menentukan primary key kustom 
    protected $primaryKey = 'kode_mk';

    // Karena kode_mk bukan angka (integer), matikan auto-increment
    public $incrementing = false;

    // Tipe data primary key adalah string
    protected $keyType = 'string';

    // Field yang boleh diisi 
    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester'];
}