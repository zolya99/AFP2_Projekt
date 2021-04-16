<?php


namespace App;


class Drink extends Model
{
    public static function search($input){
        return Drink::query()->where('name', 'like', '%' . $input . '%');
    }


}
