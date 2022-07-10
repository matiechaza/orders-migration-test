<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Order::create([
             'store_id' => 1,
             'subtotal' => fake()->randomFloat(),
             'total' => fake()->randomFloat(),
             'customer_firstname' => fake()->firstName(),
             'customer_lastname' => fake()->lastName(),
             'customer_phone' => fake()->phoneNumber(),
             'payment_status' => fake()->shuffleString(),
             'payment_method' => 'credit_card',
             'payment_credit_card_company' => 'visa',
             'payment_installments' => 12,
         ]);
    }
}
