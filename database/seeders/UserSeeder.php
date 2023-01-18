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
            'name' => 'نادي قوقل للطلبة المطورين',
            'email' => 'gdsc@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي هواوي',
            'email' => 'huawei@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
        User::create([
            'name' => 'فريق كفو التطوعي',
            'email' => 'kfu@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي أديب',
            'email' => 'adeb@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي المحاسبة',
            'email' => 'calculator@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
        User::create([
            'name' => 'نادي الإعلام',
            'email' => 'media@manie.kfu',
            'password' => Hash::make('1234')
        ])->assignRole('participant');
    }
}
