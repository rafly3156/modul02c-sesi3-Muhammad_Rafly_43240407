<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Konfigurasi Primary Key
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    // Mass assignment
    protected $fillable = ['nim', 'nama', 'kelas', 'matakuliah'];
}