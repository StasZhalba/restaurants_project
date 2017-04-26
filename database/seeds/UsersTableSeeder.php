<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
    	$user->name = "John Doe";
    	$user->email = "johndoe@test.com";
    	$user->password = crypt("secret", "");
    	$user->save();
    }
}
