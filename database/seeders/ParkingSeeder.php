<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parking; 

class ParkingSeeder extends Seeder
{
    // Parking Spots Data

    public $parkingSpots = [
        [
            'name' => 'Parkhaus City Parking',
            'address' => 'Gessnerallee 14, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.374183,
            'longitude' => 8.538730,
        ],
        [
            'name' => 'Parkhaus Hohe Promenade',
            'address' => 'Rämistrasse 22a, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.368449, 
            'longitude' => 8.547318,
        ],
        [
            'name' => 'Parkhaus Opéra',
            'address' => 'Schillerstrasse 5, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.364995, 
            'longitude' => 8.546819,
        ],
        [
            'name' => 'Parkhaus Urania',
            'address' => 'Uraniastrasse 3, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.3740885, 
            'longitude' => 8.5408521,
        ],
        [
            'name' => 'Parkhaus Nordhaus',
            'address' => 'Siewerdtstrasse 8, 8050 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.412036, 
            'longitude' => 8.547383,
        ],
        [
            'name' => 'Parkhaus Center Eleven',
            'address' => 'Sophie-Täuber-Strasse 4, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.412228, 
            'longitude' => 8.554112,
        ],
        [
            'name' => 'Parkhaus Globus',
            'address' => 'Löwenstrasse 50, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.375878, 
            'longitude' => 8.537605,
        ],
        [
            'name' => 'Parkhaus Feldegg',
            'address' => 'Rämistrasse 22, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.368314, 
            'longitude' => 8.547573,
        ],
        [
            'name' => 'Parkhaus Bleicherweg',
            'address' => 'Beethovenstrasse 35, 8002 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.367626, 
            'longitude' => 8.535681,
        ],
        [
            'name' => 'Parkhaus Park Hyatt',
            'address' => 'Beethovenstrasse 21, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.366594, 
            'longitude' => 8.536195,
        ],
        [
            'name' => 'Parkhaus Cityport',
            'address' => 'Affolternstrasse 56, 8050 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.410793, 
            'longitude' => 8.540201,
        ],
        [
            'name' => 'Parkhaus Talgarten',
            'address' => 'Hohlstrasse 67, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.377747, 
            'longitude' => 8.542436,
        ],
        [
            'name' => 'Parkhaus Gessnerallee',
            'address' => 'Lagerstrasse 2, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.377434, 
            'longitude' => 8.534659,
        ],
        [
            'name' => 'Parkhaus Sihlporte',
            'address' => 'Kalanderplatz 1, 8045 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.357742, 
            'longitude' => 8.522473,
        ],
        [
            'name' => 'Parkhaus Center Eleven Sihlquai',
            'address' => 'Sihlquai 41, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.381139, 
            'longitude' => 8.537797,
        ],
        [
            'name' => 'Parkhaus Europaallee',
            'address' => 'Lindenplatz 5, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.387441,
            'longitude' => 8.485302,
        ],
        [
            'name' => 'Parkhaus Hauptbahnhof',
            'address' => 'Sihlquai 41, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.381139, 
            'longitude' => 8.537797,
        ],
        [
            'name' => 'Parkhaus Züri 11 Shopping',
            'address' => 'Pfingstweidstrasse 106, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.390408, 
            'longitude' => 8.509583,

        ],
        [
            'name' => 'Parkhaus Octavo',
            'address' => 'Brown-Boveri-Strasse 2, 8050 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.413652, 
            'longitude' => 8.536654,
        ],
        [
            'name' => 'Parkhaus Hardplatz',
            'address' => 'Bullingerstrasse 73, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.381544, 
            'longitude' => 8.509495,
        ],
    ];
    
    
    // Run the database Seeds
    public function run(): void
    {
        foreach($this->parkingSpots as $parkingSpot){
            Parking::create([
                "name" => $parkingSpot['name'],
                "address" => $parkingSpot['address'],
                "blocked_until" => $parkingSpot['blocked_until'],
                "ev_charging" => $parkingSpot['ev_charging'],
                "blocked_until" =>  $parkingSpot['blocked_until'],
                "latitude" => $parkingSpot['latitude'], 
                "longitude" => $parkingSpot['longitude'],
            ]);
        }
    }
}
