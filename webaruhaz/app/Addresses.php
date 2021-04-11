<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

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


}
