<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' 		=> 'Jonathan',
                'last-name'	=> 'Rojas Granda',
                'email' 	=> 'jrojas@gmail.com',
                'user' 		=> 'jorogr',
                'password' => '123',
                'type' 		=> 'admin',
                'active' 	=> 1,
                'address' 	=> 'Carrer vida sol',
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
            ],
            [
                'name' 		=> 'Laia',
                'last-name' => 'Molina Martinez',
                'email' 	=> 'lmolina@gmail.com',
                'user' 		=> 'lmolina',
                'password' => '123',
                'type' 		=> 'user',
                'active' 	=> 1,
                'address' 	=> 'Carrer la molina',
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
            ]
        );
        User::insert($users);
    }
}
