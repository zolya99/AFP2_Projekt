<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DrinkController;

class Drink extends Model
{
    use HasFactory;

    protected $fillable =['name', 'price', 'type', 'description', 'onStock', 'placeOfOrigin', 'picture'];

    protected $table = 'drinks';
}
