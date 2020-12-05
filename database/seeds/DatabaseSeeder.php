<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('student'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('roles')->insert([
            'name' => 'ROLE_ADMIN',
            'description' => 'A User with Admin Privilege',
        ]);

        DB::table('roles')->insert([
            'name' => 'ROLE_STUDENT',
            'description' => 'A User with Student Privilege',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
        ]);
    }
}
