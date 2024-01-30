<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // Nama tabel

    protected $primaryKey = 'id'; // Kolom kunci primer

    protected $fillable = ['judul', 'isi', 'gambar_berita', 'tanggal_publikasi'];
}
