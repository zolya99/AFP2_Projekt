<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use App\Helpers\AppHelper;
use App\Order;
use App\Package;

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
    public function remove($id){
        $this->getUserId($id);
        $order_id = Order::getCartIDFor($id);
        Package::DeleteWhere($order_id, $id);
        return redirect('cart');
    }

}
?>
