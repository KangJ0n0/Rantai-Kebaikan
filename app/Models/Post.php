<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',       
        'deskripsi',    
        'kategori',     
        'deadline',     
        'status',       
        'lokasi',       
        'gambar',       
        'link',         
    ];
}

