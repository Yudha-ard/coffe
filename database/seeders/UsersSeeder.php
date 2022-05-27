<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@coffe.com',
                'role' => '1',
                'tgl_lahir' => Carbon::parse('2000-01-01'),
                'no_telp' => '081237188952',
                'alamat' => 'Sidoarjo, Jawa Timur',
                'password' => bcrypt('12345678'),

            ]

        ];

        foreach ($user as $key => $value) {

            User::create($value);

        }

    }
}
