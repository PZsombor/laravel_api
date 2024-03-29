<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(2,21),
            'payment_id' => $this->faker->numberBetween(1,3),
            'order_date' => $this->faker->dateTimeThisDecade(),
            //'paid_date' => $payment_id == 1 ? $this->faker->dateTimeThisDecade() : NULL
        ];
    }
}
