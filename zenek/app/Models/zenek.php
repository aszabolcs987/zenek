<?php

namespace App\Models;
// php artisan make:model zenek

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zenek extends Model
{
    use HasFactory;
    // megadom, hogy ne adjon hozzá pluszba módosítási és hozzá adási időt a táblához
    public $timestamps = false;
    // és, hogy a tábla neve zenek lesz
    protected $table = 'zenek';
}
