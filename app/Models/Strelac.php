<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klub;

class Strelac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'pozicija',
        'broj_dres',
        'broj_golova',
        'klub_id'
    ];

    public function klub()
    {
        return $this->belongsTo(Klub::class);
    }
}
