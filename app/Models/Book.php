<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $tabel = 'bookmarke';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'pages', 'pages_read',
    ];
}
