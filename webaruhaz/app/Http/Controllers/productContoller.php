<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productContoller extends Controller
{
    function getProduct($id) {
        $query = "SELECT id, products.name, price, description, onStock, placeOfOrigin FROM products WHERE id = :id";
        $params = [
            'id' => $id
        ];

        $record = getRecord($query, $params);

        if(empty($record)){
            return false;
        }
        else{
            return $record;
        }

}}
?>
