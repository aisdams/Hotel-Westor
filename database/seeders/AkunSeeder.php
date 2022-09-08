<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user = [
        [
        'username' => 'suho',
        'notelp' => '08364',
        'email' => 'suho@gmail,com',
        'level' => 'admin',
        'password' => bcrypt('suho123'),
        ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        } 
    }
}
