<?php

namespace App\Http\Controllers;
use App\Helpers\AppHelper;

//use Crypt;
use App\Models\Drink;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $this->getUserId($user_id, $needs_id);
        $order_id = Order::getCartIdFor($user_id);
        $packages = Package::forOrder($order_id);
        $ans = [];
        foreach ($packages as $pack){
            return view('cartController@show');
        }
        if($needs_id)
            return response(view('cart', ['user_id' => $user_id, 'order_id' => $order_id, 'packs' => $ans]))->cookie('guest_id', $user_id, 9999);
        return view('cart', ['user_id' => $user_id, 'order_id' => $order_id, 'packs' => $ans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add($id){
        $this->getUserId($user_id, $needs_id);
        $order_id = Order::getCartIDFor($user_id);
        Package::IncrementQuantityOrInsertNew($order_id, $id);
        if ($needs_id)
            return response(json_encode(['Success' => true, 'Order' => $order_id, 'Drink' => $id]))->cookie('guest_id', $user_id, 9999);
        return json_encode(['Success' => true, 'Order' => $order_id, 'Drink' => $id]);
    }
    public function edit($drink_id, $onStock){
        $this->getUserId($user_id, $needs_id);
        $order_id = Order::getCartIDFor($user_id);
        Package::UpdateOrInset($order_id, $drink_id, $onStock);
        if ($needs_id)
            return response(json_encode(['Success' => true, 'Order' => $order_id, 'Drink' => $drink_id]))->cookie('guest_id', $user_id, 9999);
        return json_encode(['Success' => true, 'Order' => $order_id, 'Drink' => $drink_id]);
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
    public function getUserId(&$user_id, &$needs_id): void
    {
        if (Auth::check()) {
            $user_id = Auth::id();
        } else {
            $user_id = Cookie::get('guest_id');
            if(strlen($user_id) > 10){
                $user_id = Crypt::decryptString($user_id);
            }
        }
        $needs_id = false;
        if (!$user_id) {
            $needs_id = true;
            $user_id = AppHelper::generateUserID();
        }
    }
}
