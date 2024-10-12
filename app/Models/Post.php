<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = [
        'judul',        // Title of the project
        'deskripsi',    // Full description of the project
        'kategori',     // Category of the project
        'deadline',     // Deadline for the project
        'status',       // Status of the project
        'lokasi',       // Location of the project
        'gambar',       // Image path or URL
        'link',         // Project link
    ];
}

