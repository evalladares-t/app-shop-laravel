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
        'name' =>'Edward',
        'password' => bcrypt('123123123'),
        'email' => 'evalladarestav@gmail.com',
        'admin' => true,
       ]);
    }
}
