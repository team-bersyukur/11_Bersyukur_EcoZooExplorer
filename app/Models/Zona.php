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

    public function bangunan()
    {
        return $this->hasMany(Bangunan::class);
    }

    public function treasure()
    {
        return $this->hasMany(Treasure::class);
    }
}
