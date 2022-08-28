<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class Liga extends Model
{
    use HasFactory;

    public function klubovi()
    {
        return $this->hasMany(Klub::class);
    }
}
