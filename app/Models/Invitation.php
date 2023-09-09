<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_tp',
        'gender',
        'link',
        'status',
        'respons',
        'alasan',
    ];
}
