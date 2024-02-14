<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => 'pedro',
            'password' => Hash::make('pedro12'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("users")->insert([
            'name' => 'alberto',
            'password' => Hash::make('alberto12'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user = User::find(1); 
        $user->assignRole(Role::find(1));
        $user = User::find(2); 
        $user->assignRole(Role::find(2));
    }
}
