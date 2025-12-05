<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = 'admin01@gmail.com';

        $user = User::where('email', $email)->first();
        if (!$user) {
            $user = new User();
            $user->name = 'Administrador 01';
            $user->email = $email;
            $user->password = Hash::make('123456');
        }
        $user->role = 'admin';
        $user->save();
    }
}