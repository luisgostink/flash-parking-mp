<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public $users = [
        [
            'name' => 'Luis G.',
            'email' => 'luis@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Beni B.',
            'email' => 'beni@example.ch',
            'password' => 'password123',
        ],
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
