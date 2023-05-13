<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canteen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'gallery'
    ];

    // Define any relationships here, e.g.:
    // public function menuItems() {
    //     return $this->hasMany(MenuItem::class);
    // }
}