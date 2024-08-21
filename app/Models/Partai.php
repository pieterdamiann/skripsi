<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partai extends Model
{
    use HasFactory;

    protected $fillable = [
        "partai",
        "tanggal_dibentuk",
        "ketua_umum",
        "jumlah_kursi_dpr",
        "jumlah_kursi_dpd",
        "jumlah_kursi_dprd",
        "filename",
        "link"
    ];
}
