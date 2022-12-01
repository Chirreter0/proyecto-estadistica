<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'username' => 'admin.alfonso',
            'firstname' => 'Alfonso',
            'lastname' => 'Lopez',
            'email' => 'admin@unitropico.com',
            'password' => bcrypt('12345')
        ]);
    }
}
