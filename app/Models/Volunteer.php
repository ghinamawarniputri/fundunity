<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteer';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'usia',
        'alamat',
        'rentang_waktu',
        'keterampilan'
    ];
}
