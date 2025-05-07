<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiMasuk extends Model
{
    use HasFactory;

    protected $table = 'transaksimasuk';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'nominal',
        'keterangan'
    ];
}
