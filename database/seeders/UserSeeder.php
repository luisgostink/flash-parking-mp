<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

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
        [
            'name' => 'Charlie C.',
            'email' => 'charlie@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'David D.',
            'email' => 'david@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Eva E.',
            'email' => 'eva@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Frank F.',
            'email' => 'frank@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Grace G.',
            'email' => 'grace@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Hank H.',
            'email' => 'hank@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Ivy I.',
            'email' => 'ivy@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Jack J.',
            'email' => 'jack@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Katie K.',
            'email' => 'katie@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Leo L.',
            'email' => 'leo@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Mia M.',
            'email' => 'mia@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Nathan N.',
            'email' => 'nathan@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Olivia O.',
            'email' => 'olivia@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Paul P.',
            'email' => 'paul@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Quinn Q.',
            'email' => 'quinn@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Ryan R.',
            'email' => 'ryan@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Sara S.',
            'email' => 'sara@example.ch',
            'password' => 'password123',
        ],
        [
            'name' => 'Tom T.',
            'email' => 'tom@example.ch',
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
