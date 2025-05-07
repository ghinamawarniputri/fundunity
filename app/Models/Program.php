<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'tipe_konten',
        'konten'
    ];
}
