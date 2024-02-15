<?php



namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;



class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run(): void
    {
        $users = [

            [
               'username'=>'admin',
               'email'=>'malithayasas123@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],

            [
               'username'=>'manager',
               'email'=>'manager@icta.lk',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],

            [
               'username'=>'user',
               'email'=>'user@icta.lk',
               'type'=> 0,
               'password'=> bcrypt('123456'),
            ],

            [
                'username'=>'govofficial',
                'email'=>'govofficial@icta.lk',
                'type'=> 0,
                'password'=> bcrypt('123456'),
             ],

             [
                'username'=>'cdio',
                'email'=>'cdio@icta.lk',
                'type'=> 0,
                'password'=> bcrypt('123456'),
             ],

        ];



        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}
