<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'name' => 'sekrekbmsi',
                'nim'=>'sekrekbmsi12',
                'password'=> bcrypt('sekre123'),
                'role' => 'sekretaris',
            ],
            [
                'name' => 'Anggraeni Puspa Sari',
                'nim'=>'205150401111018',
                'password'=> bcrypt('anggi156'),
                'role' => 'user',
            ],
            [
                'name' => 'Sari Rahmawati',
                'nim'=>'205150401111019',
                'password'=> bcrypt('sari123'),
                'role' => 'user',
            ],
            [
                'name' => 'Salsabila Nur Malahayati',
                'nim'=>'205150401111022',
                'password'=> bcrypt('salsa456'),
                'role' => 'user',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}