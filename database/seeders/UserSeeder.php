<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name'=>'hallo  ',
            'email'=>'hallo@gmail.com',
            'password' => bcrypt('a'),
            'level' => 1
        ],
        [
            'name'=>'hayu',
            'email'=>'hayu@gmail.com',
            'password' => bcrypt('a'),
            'level' => 2
        ],
        [
            'name'=>'kasir',
            'email'=>'kasir@gmail.com',
            'password' => bcrypt('a'),
            'level' => 2
        ],
    ];
    foreach ($user as $key => $value){
        User::create($value);
    }

}
}
