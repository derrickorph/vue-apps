<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
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
        User::factory()
            ->count(10)
            ->has(
                Order::factory()
                    ->count(3)
                    ->hasAttached(
                        Product::factory()->count(5),
                        ['total_price' => rand(100, 500), 'total_quantity' => rand(1, 3)]
                    )
            )
            ->create();
        Post::factory(30)->create();
        Customer::factory(30)->create();
    }
}
