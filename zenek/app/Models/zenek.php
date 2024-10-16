<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zenek extends Model
{
    // php artisan make:model zenek
    use HasFactory;
    // ne adjon hozza pluszba modositasi es mentesi idpot
    public $timestamps = false;
    // és, hogy a tábla neve zenek lesz
    protected $table = 'zenek';
}
