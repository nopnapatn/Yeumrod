<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'admin';
        $user->phone_number = '0000000000';
        $user->email = 'admin@test.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->is_admin = 1;
        $user->save();

        // $user = new User();
        // $user->first_name = 'User';
        // $user->last_name = 'user';
        // $user->phone_number = '1111111111';
        // $user->email = 'user@test.com';
        // $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        // $user->is_admin = 0;
        // $user->save();

        User::factory()
            ->count(20)
            ->create();
    }
}
