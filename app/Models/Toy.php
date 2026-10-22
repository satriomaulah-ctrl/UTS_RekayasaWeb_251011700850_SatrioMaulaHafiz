<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $table = 'toys';

    protected $fillable = ['name', 'age_group', 'category', 'price', 'image', 'description'];

    public function getHargaRupiahAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}