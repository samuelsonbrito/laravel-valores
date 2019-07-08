<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Samuelson Brito',
            'email' => 'samuelson@descompila.com.br',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Debora',
            'email' => 'debora@descompila.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
