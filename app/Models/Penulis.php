<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Penulis extends Model
// {
//     use HasFactory;

// }


class Penulis extends Model
{
    protected $fillable = ['name', 'email', 'address'];
}
