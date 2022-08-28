<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Liga;
use App\Models\Strelac;

class Klub extends Model
{
    use HasFactory;

    public function liga()
    {
        return $this->belongsTo(Liga::class);
    }

    public function strelci()
    {
        return $this->hasMany(Strelac::class);
    }
}
