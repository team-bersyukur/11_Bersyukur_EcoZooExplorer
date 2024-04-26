<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function zona()
    {
        return $this->belongsTo(Zona::class);
    }
}
