<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'table_buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = true;

    protected $fillable = [
        'judul',
        'sinopsis',
        'pengarang',    
    ];
}
