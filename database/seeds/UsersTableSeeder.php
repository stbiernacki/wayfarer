<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('users')) {
            DB::table('users')->truncate();
            User::updateOrCreate([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin')
            ]);
        }
    }
}
