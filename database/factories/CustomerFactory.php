<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I' ? $this->fake->name() : this->faker->company();
        $county = $this->faker->randomElement(['Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád-Csanád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Beger', 'Tolna', 'Vas', 'Veszprém', 'Zala']);
        $city; //kéne xd
        $admin = $this->faker->randomElement(['True', 'False']);
        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email(),
            'password' => str_random(8),
            'county' => $county,
            'city' => $city,
            'postal_code' => random(1000,9999),
            'phone',
            'admin' => $admin
        ];
    }
}
