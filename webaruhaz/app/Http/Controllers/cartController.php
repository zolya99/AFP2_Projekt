<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class cartController extends Controller
{

    public function index(){
        return view('cart');
    }
    public function getProduct($id)
    {
        $query = "SELECT FROM id, products.name, type, price, description, onStock, placeOfOrigin, picture FROM products WHERE id = :id";
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

    }
}
?>
