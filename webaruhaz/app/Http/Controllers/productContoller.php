<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productContoller extends Controller
{
    function addOrder() {
        $query = "SELECT users.id as id, product_brand, product_name, quantity, price FROM products p, cart c WHERE c.product_id = p.id AND c.user_id = :user_id";
        $params = [
            'id' => $_SESSION['uid']
        ];
}}
?>
