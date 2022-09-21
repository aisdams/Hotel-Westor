<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Fasilitashotel;
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
        'username' => 'admin',
        'email' => 'admin@gmail,com',
        'level' => 'admin',
        'notelp' => '084898293',
        'password' => bcrypt('admin123'),
        ],
        [
            'username' => 'resepsionis',
            'email' => 'resepsionis@gmail,com',
            'level' => 'resepsionis',
            'notelp' => '082223834',
            'password' => bcrypt('apa123'),
        ],
        [
            'username' => 'suho',
            'email' => 'suho@gmail,com',
            'level' => 'tamu',
            'notelp' => '081234343',
            'password' => bcrypt('suho123'),
        ]

        ];
        $fasilitashotel = [
            [
                'namafasilitas' => 'Bathroom',
                'keterangan' => 'Good',
                'image' => 'bathroom.png'
            ],
            [
                'namafasilitas' => 'Park',
                'keterangan' => 'Good',
                'image' => 'taman.jpeg'
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        } 
        foreach ($fasilitashotel as $key => $value) {
            Fasilitashotel::create($value);
        }
    }
}
