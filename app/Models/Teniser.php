<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trening;

class Teniser extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'drzava',
        'godiste',
        'rank'
    ];

    public function treninzi()
    {
        return $this->hasMany(Trening::class);
    }
}
