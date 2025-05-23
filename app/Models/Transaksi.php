<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'tipe_konten',
        'konten'
    ];
}
