<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata=[
            [
            'name' =>'Admin',
            'email'=>'admin@gmail.com',
            'is_admin'=>'1',
            'password'=>bcrypt('12345'),
            ],
            [
            'name' =>'User',
            'email'=>'user@gmail.com',
            'is_admin'=>'0',
            'password'=>bcrypt('12345'),
            ]
        ];
        foreach ($userdata as $key => $val) {
           User::create($val);
        }
    }
}
