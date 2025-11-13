<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create([
            'name' => 'DANIS',
            'email' => 'raditbujang@example.com',
            'password' => Hash::make('bujangenana'),
        ]);
    }
}
