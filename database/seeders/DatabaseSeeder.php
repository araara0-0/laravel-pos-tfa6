<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Customer::query()->insert([
            ['full_name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0917 245 8103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0928 506 1742', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '0916 883 2094', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Carlos Villanueva', 'email' => 'carlos.villanueva@example.com', 'phone' => '0908 114 6735', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Bianca Flores', 'email' => 'bianca.flores@example.com', 'phone' => '0995 732 4801', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::query()->insert([
            ['username' => 'lara.admin', 'full_name' => 'Lara Dela Cruz', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'noel.cashier', 'full_name' => 'Noel Garcia', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'janine.cashier', 'full_name' => 'Janine Torres', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'paolo.inventory', 'full_name' => 'Paolo Ramos', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'trisha.manager', 'full_name' => 'Trisha Lim', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
