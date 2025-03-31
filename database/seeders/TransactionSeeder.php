<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            ['amount' => 100.50, 'description' => 'Payment 1', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['amount' => 75.25, 'description' => 'Payment 2', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}