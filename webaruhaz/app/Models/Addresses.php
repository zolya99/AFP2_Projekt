<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Addresses extends Model
{
    /**
     * Create new address record
     * @param string $country
     * @param string $postal_code
     * @param string $city
     * @param string $street
     * @param string $house
     * @param string|null $note
     * @return int Last inserted id
     */
    public static function create($country, $postal_code, $city, $street, $house, $note)
    {
        DB::insert('INSERT INTO `addresses` (country, postal_code, city, street, house, note) VALUES (:country, :postal_code, :city, :street, :house, :note)', [
            'country' => $country,
            'postal_code' => $postal_code,
            'city' => $city,
            'street' => $street,
            'house' => $house,
            'note' => $note,
        ]);
        return DB::getPdo()->lastInsertId();
    }
    public static function find($id)
    {
    }

}
