<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $county = $this->faker->randomElement(['Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád-Csanád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Beger', 'Tolna', 'Vas', 'Veszprém', 'Zala']);
        $city; //kéne xd
        $admin = $this->faker->randomElement(['True', 'False']);
        return [
            'name' => Str::random(10),
            'type' => $type,
            'email' => $this->faker->email(),
            'password' => Str::random(10),
            'address' => Str::random(10),
            'county' => $county,
            'city' => Str::random(10),
            'postal_code' => $this->faker->numberBetween(1000,9999),
            'phone' => Str::random(10),
            'admin' => $admin
        ];
    }
}
