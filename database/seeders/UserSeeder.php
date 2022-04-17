<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Lim Sopheak',
            'email' => 'limsopheak89@gmail.com',
            'password' => bcrypt('20419970'),
        ]);
    }
}
