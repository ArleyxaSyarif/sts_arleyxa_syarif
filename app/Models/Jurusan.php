<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $fillable = [
        'nama_jurusan', 
        'detail'
    ];
}
