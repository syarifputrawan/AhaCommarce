<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_brand',
        'nama',
        'email',
        'nomor_hp',
        'pesan',
    ];
}
