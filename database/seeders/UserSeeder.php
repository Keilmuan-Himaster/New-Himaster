<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(
            [
                'name' => 'Admin',
                'nim' => 'himaster@fmipa.untan.ac.id',
                'password' => Hash::make('SiapSediaKompak'),
            ]
            );
    }
}
