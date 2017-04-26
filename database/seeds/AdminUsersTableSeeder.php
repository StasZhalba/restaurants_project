<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $user = new Admin();
	    $user->name = "Jane Doe";
	    $user->email = "janedoe@test.com";
	    $user->password = crypt("secret", "");
	    $user->save();
    }
}
