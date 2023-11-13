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
            'user_id' => 1,
            'name' => 'Parkhaus City Parking',
            'address' => 'Gessnerallee 14, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.374183,
            'longitude' => 8.538730,
        ],
        [
            'user_id' => 2,
            'name' => 'Parkhaus Hohe Promenade',
            'address' => 'Rämistrasse 22a, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.368449,
            'longitude' => 8.547318,
        ],
        [
            'user_id' => 3,
            'name' => 'Parkhaus Opéra',
            'address' => 'Schillerstrasse 5, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.364995,
            'longitude' => 8.546819,
        ],
        [
            'user_id' => 4,
            'name' => 'Parkhaus Urania',
            'address' => 'Uraniastrasse 3, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.3740885,
            'longitude' => 8.5408521,
        ],
        [
            'user_id' => 5,
            'name' => 'Parkhaus Nordhaus',
            'address' => 'Siewerdtstrasse 8, 8050 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.412036,
            'longitude' => 8.547383,
        ],
        [
            'user_id' => 6,
            'name' => 'Parkhaus Center Eleven',
            'address' => 'Sophie-Täuber-Strasse 4, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.412228,
            'longitude' => 8.554112,
        ],
        [
            'user_id' => 7,
            'name' => 'Parkhaus Globus',
            'address' => 'Löwenstrasse 50, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.375878,
            'longitude' => 8.537605,
        ],
        [
            'user_id' => 8,
            'name' => 'Parkhaus Feldegg',
            'address' => 'Rämistrasse 22, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.368314,
            'longitude' => 8.547573,
        ],
        [
            'user_id' => 9,
            'name' => 'Parkhaus Bleicherweg',
            'address' => 'Beethovenstrasse 35, 8002 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.367626,
            'longitude' => 8.535681,
        ],
        [
            'user_id' => 10,
            'name' => 'Parkhaus Park Hyatt',
            'address' => 'Beethovenstrasse 21, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.366594,
            'longitude' => 8.536195,
        ],
        [
            'user_id' => 11,
            'name' => 'Parkhaus Cityport',
            'address' => 'Affolternstrasse 56, 8050 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.410793,
            'longitude' => 8.540201,
        ],
        [
            'user_id' => 12,
            'name' => 'Parkhaus Talgarten',
            'address' => 'Hohlstrasse 67, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.377747,
            'longitude' => 8.542436,
        ],
        [
            'user_id' => 13,
            'name' => 'Parkhaus Gessnerallee',
            'address' => 'Lagerstrasse 2, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.377434,
            'longitude' => 8.534659,
        ],
        [
            'user_id' => 14,
            'name' => 'Parkhaus Sihlporte',
            'address' => 'Kalanderplatz 1, 8045 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.357742,
            'longitude' => 8.522473,
        ],
        [
            'user_id' => 15,
            'name' => 'Parkhaus Center Eleven Sihlquai',
            'address' => 'Sihlquai 41, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.381139,
            'longitude' => 8.537797,
        ],
        [
            'user_id' => 16,
            'name' => 'Parkhaus Europaallee',
            'address' => 'Lindenplatz 5, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.387441,
            'longitude' => 8.485302,
        ],
        [
            'user_id' => 17,
            'name' => 'Parkhaus Hauptbahnhof',
            'address' => 'Sihlquai 41, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.381139,
            'longitude' => 8.537797,
        ],
        [
            'user_id' => 18,
            'name' => 'Parkhaus Züri 11 Shopping',
            'address' => 'Pfingstweidstrasse 106, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.390408,
            'longitude' => 8.509583,
        ],
        [
            'user_id' => 19,
            'name' => 'Parkhaus Octavo',
            'address' => 'Brown-Boveri-Strasse 2, 8050 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.413652,
            'longitude' => 8.536654,
        ],
        [
            'user_id' => 20,
            'name' => 'Parkhaus Hardplatz',
            'address' => 'Bullingerstrasse 73, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => null,
            'latitude' => 47.381544,
            'longitude' => 8.509495,
        ],
    ]; 
    
    // Output the updated array
    // print_r($parkingSpots);
    
    
    
    // Run the database Seeds
    public function run(): void
    {
        foreach($this->parkingSpots as $parkingSpot){
            Parking::create([
                "user_id" => $parkingSpot['user_id'],
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
