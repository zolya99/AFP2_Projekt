<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (\App\Models\User::all() as $user){
            echo("\rGenerating cart for user #" . $user->id . " more...   ");
            \App\Models\Order::CreateCart($user->id);
            for ($i = 0; $i < rand(-4, 5); $i++) { //50% chance of empty cart
                DB::table('packages')->insert([
                    'order_id' => \App\Models\Order::all()->last()->id,
                    'drink_id' => \App\Models\Drink::all()->random()->id,
                    'quantity' => rand(1, 5)
                ]);
            }
        } echo "\r                                                                       ";

        for ($i = 0; $i < 300; $i++) {
            echo("\rGenerating " . (300-$i) . " more...  ");

            $user = \App\User::all()->random();
            DB::table('orders')->insert([
                'id' => \App\Helpers\AppHelper::generateOrderID(),
                'user_id' => $user->id,
                'billing' => $user->billing ?? factory(\App\Addresses::class)->create()->id,
                'shipping' => (rand(0, 9) == 0) ? ($user->shipping ?? factory(\App\Addresses::class)->create()->id) : null,
                'status' => rand(1,4)
            ]);
        }

        echo("\r");
    }
}
