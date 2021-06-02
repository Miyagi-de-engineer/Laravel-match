<?php

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
        DB::table('users')->insert([
            [
                'name'     => 'john',
                'email'    => 'john@test.com',
                'sex'      => '0',
                'self_introduction' => 'hello john',
                'img_name' => 'sample001.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name'     => 'tommy',
                'email'    => 'tommy@test.com',
                'sex'      => '0',
                'self_introduction' => 'hello tommy',
                'img_name' => 'sample002.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name'     => 'jake',
                'email'    => 'jake@test.com',
                'sex'      => '0',
                'self_introduction' => 'hello jake',
                'img_name' => 'sample003.jpg',
                'password' => Hash::make('password123'),
            ],
            [
                'name'     => 'ada',
                'email'    => 'ada@test.com',
                'sex'      => '1',
                'self_introduction' => 'hello ada',
                'img_name' => 'sample004.jpg',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
