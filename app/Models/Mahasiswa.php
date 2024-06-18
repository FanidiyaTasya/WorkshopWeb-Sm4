<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = [
        'nim', 'nama', 'tgl_lahir', 'alamat', 'th_angkatan', 'status'
    ];

    public $timestamps = true;
}
