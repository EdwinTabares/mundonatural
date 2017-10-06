<?php

use Illuminate\Database\Seeder;
use App\Modelo\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create(['nombre'=>'Medrar',
    			'apellido'=>'System',
    			'email'=>'medrar@gmail.com',
    			'password'=>bcrypt('abc123')
    	]);
    }
}
