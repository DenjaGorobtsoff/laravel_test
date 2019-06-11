<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'I am',
                'email' => 'iam@email.com',
                'password' => bcrypt(111111)
            ],
            [
                'name' => 'Iron Man',
                'email' => 'ironm@email.com',
                'password' => bcrypt(111111)
            ],
            [
                'name' => 'Hulk',
                'email' => 'hulk@email.com',
                'password' => bcrypt(111111)
            ],
            [
                'name' => 'Tor',
                'email' => 'torrrrr@email.com',
                'password' => bcrypt(111111)
            ],
            [
                'name' => 'Aqua man',
                'email' => 'am@email.com',
                'password' => bcrypt(111111)
            ],
        ];

        \DB::table('users')->insert($users);
    }
}
