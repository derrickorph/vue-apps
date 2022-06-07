<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Post;
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
        User::factory(2)->create();
        Post::factory(30)->create();
        Customer::factory(30)->create();
    }
}