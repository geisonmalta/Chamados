<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raul Duque',
            'email'=> 'raulgduque2000@gmail.com',
            'password'=> bcrypt('Supremodetra2@'),
            'company_id'=> 1
        ]);
    }
}
