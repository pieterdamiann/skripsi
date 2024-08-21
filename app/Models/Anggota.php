<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partai;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $primaryKey = 'id';
    protected $fillable = [
        "partai_id",
        "nama_calon",
        "daerah_pilih",
        "nomor_urut",
        "filename"
    ];
    public function partai(){
        return $this->belongsTo(Partai::class, 'partai_id', 'id');
    }
}

