<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hewan()
    {
        return $this->hasMany(Hewan::class, );
    }
}
