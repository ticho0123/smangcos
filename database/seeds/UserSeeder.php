<?php

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
        \App\User::create([
            'name' => 'admin',
            'username' => 'admintest',
            'email' => 'admin@admin.com',
            'telfon' => '089809483038',
            'password' =>  Hash::make('12345678'),
            'gender' => 'wanita',
            'tanggal_lahir' => '2020-12-23',
            'asal' => 'jawa tengah',
            'type' => 'admin'
        ]);

        \App\User::create([
            'name' => 'user',
            'username' => 'usertest',
            'email' => 'user@user.com',
            'telfon' => '089809483038',
            'password' =>  Hash::make('12345678'),
            'gender' => 'wanita',
            'tanggal_lahir' => '2020-12-23',
            'asal' => 'jawa tengah',
            'type' => 'user'
        ]);
    }
}
