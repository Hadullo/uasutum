<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\User;
use App\Models\Role;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $officialRole = Role::where('name', 'official')->first();
        $memberRole = Role::where('name', 'member')->first();

        $admin = User::create([

            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(value:'adminadmin')
        ]);


        $official = User::create([

            'name' => 'Official User',
            'email' => 'official@gmail.com',
            'password' => Hash::make(value:'password')
        ]);


        $member= User::create([

            'name' => 'Member User',
            'email' => 'member@gmail.com',
            'password' => Hash::make(value:'password')
        ]);

        $admin->roles()->attach($adminRole);
        $official->roles()->attach($officialRole);
        $member->roles()->attach($memberRole);
    }
}
