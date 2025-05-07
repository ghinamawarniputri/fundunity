<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKonfirmasi extends Model
{
    use HasFactory;

    protected $table = 'transaksikonfirmasi';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'nominal',
        'keterangan'
    ];
}
