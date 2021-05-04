<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Package extends Model
{
    protected $table ='packages';
    public static function forOrder(string $order_id)
    {
        return DB::table('packages')->where('order_id', 'like', "%$order_id%")->get();
    }

    /**
     * @param string $order_id Order for the package
     * @param $drink_id int|string Drink for the package
     * @return bool If Successful
     */
    public static function IncrementQuantityOrInsertNew(string $order_id, $drink_id) : bool
    {
        if(DB::table('packages')->where('order_id', '=', $order_id)->where('drink_id', '=', $drink_id)->count() > 0){
            return DB::update('UPDATE `packages` SET `quantity` = `quantity`+1 WHERE `order_id`=:order_id AND `drink_id` = :drink_id',
                [
                    'order_id' => $order_id,
                    'drink_id' => $drink_id
                ]
            );
        }
        else{
            return DB::insert('INSERT INTO `packages` (`order_id`, `drink_id`, `quantity`) VALUES (:order_id, :drink_id, 1)',
                [
                    'order_id' => $order_id,
                    'drink_id' => $drink_id
                ]
            );
        }
    }

    /**
     * Update if record exists, inserts otherwise
     * @param string $order_id
     * @param $drink_id
     * @param $quantity
     * @return bool if Successful
     */
    public static function UpdateOrInset(string $order_id, $drink_id, $quantity) : bool
    {
        $package = Package::query()->where('drink_id', '=', $drink_id)->where('order_id', '=', $order_id);
        if($package->count() > 0){
            return DB::update('UPDATE `packages` SET `quantity`=:quantity WHERE `order_id` = :order_id AND `drink_id` = :drink_id',
                [
                    'quantity' => $quantity,
                    'order_id' => $order_id,
                    'drink_id' => $drink_id
                ]
            );
        }
        else{
            return DB::insert('INSERT INTO `packages` (`order_id`, `drink_id`, `quantity`) VALUES(:order_id, :drink_id, :quantity)',
                [
                    'order_id' => $order_id,
                    'drink_id' => $drink_id,
                    'quantity' => $quantity
                ]
            );
        }
    }

    public static function DeleteWhere(string $order_id, $drink_id)
    {
        return DB::delete('DELETE FROM `packages` WHERE drink_id = :drink_id AND order_id = :order_id',
            [
                'drink_id' => $drink_id,
                'order_id' => $order_id
            ]
        );
    }

    public static function move(string $from, string $to)
    {
        DB::update('UPDATE packages SET order_id = :to WHERE order_id = :from',[
            'to' => $to,
            'from' => $from
        ]);
    }

    public function order(){
        return $this->belongsTo(Order::class); //`package`.`order_id` -t keres
        //$this->hasOne(Order::class); //`orders`.`package_id` -t keres
    }

    public function drink(){
        $this->hasOne(Drink::class);
    }
}
