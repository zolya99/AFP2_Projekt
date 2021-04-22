<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Helpers\AppHelper;
use App\Order;
use App\Package;
use App\User;
use Faker\Provider\Address;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('order.list', ['orders' => Order::ofUser(User::whoami())]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'u_name' => 'required|max:255',
            'u_email' => 'required|email',
            'u_tel' => 'required',
            's_country' => 'required|max:255',
            's_tin' => 'max:255',
            's_postal_code' => 'required|max:255',
            's_city' => 'required|max:255',
            's_street' => 'required|max:255',
            's_house' => 'required|max:255',
            's_note' => 'max:255'
        ]);
        if(
            null != ($request->input('b_country')) ||
            null != ($request->input('b_postal_code')) ||
            null != ($request->input('b_city')) ||
            null != ($request->input('b_street')) ||
            null != ($request->input('b_house'))
        ){
            $request->validate([
                'b_country' => 'required|max:255',
                'b_tin' => 'max:255',
                'b_postal_code' => 'required|max:255',
                'b_city' => 'required|max:255',
                'b_street' => 'required|max:255',
                'b_house' => 'required|max:255',
                'b_note' => 'max:255',
            ]);
            $billing = Addresses::create($request->input('b_country'),
                $request->input('b_tin', ''),
                $request->input('b_postal_code'),
                $request->input('b_city'),
                $request->input('b_street'),
                $request->input('b_house'),
                $request->input('b_note')
            );
        }
        $shipping = Addresses::create($request->input('s_country'),
            $request->input('s_tin', ''),
            $request->input('s_postal_code'),
            $request->input('s_city'),
            $request->input('s_street'),
            $request->input('s_house'),
            $request->input('s_note')
        );
        $order_id = Order::create(User::whoami(), $billing ?? $shipping, $shipping);
        Package::move(Order::getCartIDFor(User::whoami()), $order_id);
        return AppHelper::viewWithGuestId('order.complete', ['order_id' => $order_id]);
    }

    public static function place(Request $request){
        $order_id = $request->input('order');
        foreach (array_keys($request->all()) as $key){
            if(substr( $key, 0, 9 ) === "quantity_"){
                $drink_id = substr($key, strpos($key, "_") + 1);
                Package::UpdateOrInset($order_id, $drink_id, $request->input($key));
            }
        }

        return AppHelper::viewWithGuestId('order.place', [
            'order_id' => $order_id,
        ]);
    }


}
