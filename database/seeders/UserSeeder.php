<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'مقدم',
            'email' => 'presenter@manie.kfu',
            'password' => Hash::make('presenter1234')
        ])->assignRole('presenter');
        User::create([
            'name' => 'مشاهد',
            'email' => 'viewer@manie.kfu',
            'password' => Hash::make('viewer1234')
        ])->assignRole('viewer');
        User::create([
            'name' => 'نادي راديوس القانوني',
            'avatar' => '1',
            'email' => 'radios@manie.kfu',
            'password' => Hash::make('rdi111')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي IEEE',
            'email' => 'ieee@manie.kfu',
            'avatar' => '2',
            'password' => Hash::make('ieee121')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي همة',
            'email' => 'himah@manie.kfu',
            'avatar' => '3',
            'password' => Hash::make('hi122')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي ترحال',
            'email' => 'trhal@manie.kfu',
            'avatar' => '4',
            'password' => Hash::make('trhal131')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي أديب',
            'email' => 'adeeb@manie.kfu',
            'avatar' => '5',
            'password' => Hash::make('adeeb1212')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي كفو',
            'email' => 'kfu@manie.kfu',
            'avatar' => '6',
            'password' => Hash::make('kfu141')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي قوقل للطلبة المطورين',
            'email' => 'gdsc@manie.kfu',
            'avatar' => '7',
            'password' => Hash::make('gdsc151')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي هواوي',
            'email' => 'hsd@manie.kfu',
            'avatar' => '8',
            'password' => Hash::make('hsd199')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي الإعلام',
            'email' => 'media@manie.kfu',
            'avatar' => '9',
            'password' => Hash::make('med822')
        ])->assignRole('participant');
    }
}
