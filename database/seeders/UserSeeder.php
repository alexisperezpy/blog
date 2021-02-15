<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'=>'Alexis José Pérez Molinas',
            'email'=>'ale.perez@ale.com',
            'password'=>bcrypt('lapichu123')
        ]);

        User::factory(20)->create();
    }
}
