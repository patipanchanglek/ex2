<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Patchayanee Massakang";
        $user->email = "patchayanee.m1224@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }

}
