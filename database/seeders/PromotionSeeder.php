<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        DB::table('promotions')->insert([
            [
                'title' => 'Big Book Sale',
                'description' => 'Discount up to 70% for all fiction books',
                'image' => 'promo1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Arrival',
                'description' => 'Get 20% off for all new arrival books this month',
                'image' => 'promo2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Children Book Fair',
                'description' => 'Special prices for children books and educational materials',
                'image' => 'promo3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}