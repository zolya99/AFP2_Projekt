<?php

namespace Database\Factories;

use App\Models\Addresses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AddressesFactory extends Factory{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Addresses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->numberBetween(0,100),
            'tin' =>$this->faker,
            'postal_code' => $this->faker->lexify('0000'),
            'city' => $this->faker->city,
            'street' => $this->faker->address,
            'house' => $this->faker->numberBetween(0,100),
            'note' => $this->faker->sentence(),
        ];
    }

}

