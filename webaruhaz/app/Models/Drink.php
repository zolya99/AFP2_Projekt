<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DrinkController;
use Illuminate\Support\Facades\DB;

class Drink extends Model
{
    use HasFactory;
    protected $table = 'drinks';

    protected $fillable =['name', 'price', 'type', 'description', 'onStock', 'placeOfOrigin', 'picture'];

    public static function find($id)
    {
    $myquery = DB::table('drinks')->select('name')->where('id', '=', $id)->get();
    return $myquery[0]->name;

    }

    public static function findPrice($id)
    {
        $myquery = DB::table('drinks')->select('price')->where('id', '=', $id)->get();
        return $myquery[0]->price;

    }


}
