<?php

use Illuminate\Database\Seeder;

class users extends Seeder
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
                'first_name'=>'mina','last_name'=>'nade','email'=>'admin@gmail.com',
               'password'=>\Illuminate\Support\Facades\Hash::make('1234'),'type'=>'admin'
            ],
            ['first_name'=>'mina','last_name'=>'nade','email'=>'receptionist@gmail.com',
               'password'=>\Illuminate\Support\Facades\Hash::make('1234'),'type'=>'receptionist'],
            [ 'first_name'=>'mina','last_name'=>'nade','email'=>'doctor@gmail.com',
                'password'=>\Illuminate\Support\Facades\Hash::make('1234'),'type'=>'doctor'],
            [ 'first_name'=>'mina','last_name'=>'nade','email'=>'nurse@gmail.com',
                'password'=>\Illuminate\Support\Facades\Hash::make('1234'),'type'=>'nurse'],
        ];

        foreach ($users as $user) {

            \App\User::create($user);

        }
    }
}
