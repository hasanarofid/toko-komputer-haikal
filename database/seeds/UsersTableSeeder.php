<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id'=>1,
                'name'=>'Owner',
                'email'=>'haikal@tokokomputer.com',
                'password'=>Hash::make('haikal123'),
                'role'=>'Owner'
            ],
            [
                'id'=>2,
                'name'=>'HRD',
                'email'=>'hrd@tokokomputer.com',
                'password'=>Hash::make('hrd123'),
                'role'=>'HRD'
            ],
            [
                'id'=>3,
                'name'=>'Teknisi',
                'email'=>'teknisi@tokokomputer.com',
                'password'=>Hash::make('teknisi123'),
                'role'=>'Teknisi'
            ],
            [
                'id'=>4,
                'name'=>'Marketing',
                'email'=>'marketing@tokokomputer.com',
                'password'=>Hash::make('marketing123'),
                'role'=>'Marketing'
            ],
            [
                'id'=>5,
                'name'=>'User',
                'email'=>'user@tokokomputer.com',
                'password'=>Hash::make('user123'),
                'role'=>'User'
            ],
             [
                'id'=>6,
                'name'=>'Admin',
                'email'=>'admin@tokokomputer.com',
                'password'=>Hash::make('admin123'),
                'role'=>'Admin'
            ],
        ]);
    }
}