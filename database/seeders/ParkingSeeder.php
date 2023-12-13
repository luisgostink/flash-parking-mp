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
            'user_id' => null,
            'name' => 'Parkhaus City Parking',
            'address' => 'Gessnerallee 14, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.375255,
            'longitude' => 8.534919,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.8860524309007!2d8.532355076301027!3d47.37514240393228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a05ba08abe9%3A0x193db20322cc3d7a!2sGessnerallee%2014%2C%208001%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701090133691!5m2!1sen!2sch',
        ],
        [   
            'user_id' => null,
            'name' => 'Parkhaus Hohe Promenade',
            'address' => 'Rämistrasse 22a, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.369053, 
            'longitude' => 8.547989,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.2313881448417!2d8.544752476300673!3d47.368402204396006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa0acf4dd4691%3A0x6283ddfcf8032f3f!2sR%C3%A4mistrasse%2022A%2C%208001%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701090433362!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Opéra',
            'address' => 'Schillerstrasse 5, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.365182,
            'longitude' => 8.547206, 
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.4074077671703!2d8.544255076300496!3d47.364966404632426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa754a7021319%3A0x1306035e5beb654f!2sSchillerstrasse%205%2C%208008%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701090527616!5m2!1sen!2sch',
        ],
        [   
            'user_id' => null,
            'name' => 'Parkhaus Urania',
            'address' => 'Uraniastrasse 3, 8001 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.374156,
            'longitude' => 8.540937,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.938114944254!2d8.538039276300943!3d47.37412630400208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a07a0bb7859%3A0xba7fbeb769d5c73!2sUraniastrasse%203%2C%208001%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701090775394!5m2!1sen!2sch',
        ],
        [   
            'user_id' => null,
            'name' => 'Parkhaus Nordhaus',
            'address' => 'Siewerdtstrasse 8, 8050 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' =>  47.412182, 
            'longitude' => 8.5475035,
          'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.997978180912!2d8.544771876302933!3d47.41198060139682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a840b853d73%3A0xdac202a0ef8c2ed9!2sSiewerdtstrasse%208%2C%208050%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701090878591!5m2!1sen!2sch'
        ],
        [    
            'user_id' => null,
            'name' => 'Parkhaus Center Eleven',
            'address' => 'Sophie-Täuber-Strasse 4, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.413191,
            'longitude' => 8.540569,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.9446586884287!2d8.538016276302947!3d47.413020601325115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a8f127ef1a9%3A0x8ced05ad40cf6d5!2sSophie-Taeuber-Strasse%204%2C%208050%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091038108!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Globus',
            'address' => 'Löwenstrasse 50, 8001 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.376051,  
            'longitude' => 8.537807,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.848423017104!2d8.535092876301045!3d47.37587680388176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a060e870a63%3A0x826751a20efef3f6!2sL%C3%B6wenstrasse%2050%2C%208001%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091080664!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Feldegg',
            'address' => 'Riesbachstrasse 7, 8008 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.360472,
            'longitude' => 8.553561,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.237331104492!2d8.545028976300634!3d47.368286204403965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa0ac85d64f6d%3A0xf2d00c7c3af1712b!2sR%C3%A4mistrasse%2022%2C%208001%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091368713!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Bleicherweg',
            'address' => 'Beethovenstrasse 35, 8002 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.367671, 
            'longitude' => 8.535592,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.2760676588787!2d8.532921476300585!3d47.36753010445604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a01e4e2cca5%3A0x4938e4f2a5184ca1!2sBeethovenstrasse%2035%2C%208002%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091422977!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Park Hyatt Zürich',
            'address' => 'Gotthardstrasse 27, 8002 Zürich',
            'ev_charging' => false,
            'blocked_until' => null, 
            'latitude' => 47.365922,
            'longitude' => 8.536197,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d675.5818231829261!2d8.535875823220934!3d47.36653022664304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479009ff6edefd11%3A0xf3d314c06faaa017!2sParkhaus%20Park%20Hyatt%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1702481171329!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Octavo',
            'address' => 'Brown-Boveri-Strasse 2, 8050 Zürich',
            'ev_charging' => true,
            'blocked_until' => null, 
            'latitude' => 47.413637, 
            'longitude' => 8.536516,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.0524503014603!2d8.538108276302877!3d47.410918101469896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a88b2f7e071%3A0xc36eec94cadf45d2!2sAffolternstrasse%2056%2C%208050%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091537306!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Letzopark',
            'address' => 'Hohlstrasse 67, 8004 Zürich',
            'ev_charging' => false,
            'blocked_until' => '2023-12-01 14:30:00',
            'latitude' => 47.388545,
            'longitude' =>  8.498613,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.7499255150074!2d8.521854876301155!3d47.37779910374944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a1758a55513%3A0x37213f5d2aafab8b!2sHohlstrasse%2067%2C%208004%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091594175!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parking Europaallee-Passage',
            'address' => 'Parking, Freischützgasse, 8004 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.380663,
            'longitude' => 8.534232,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.7754481529655!2d8.53142157630114!3d47.377301003783785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a0587520803%3A0x2ad83896e9c6a2db!2sLagerstrasse%202%2C%208004%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091702706!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Sihlcity',    
            'address' => 'Kalanderplatz 1, 8045 Zürich',
            'ev_charging' => false,
            'blocked_until' => '2023-11-30 12:00:00',
            'latitude' => 47.357083,
            'longitude' => 8.522936,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.756702986516!2d8.519933376300173!3d47.35814780510149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479009ee2a8a452f%3A0x54bc3dafbb7de515!2sKalanderpl.%201%2C%208045%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091784056!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Hauptbahnhof',
            'address' => 'Sihlquai 41, 8005 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.381683,
            'longitude' =>  8.537553,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.5484580878756!2d8.535200176301384!3d47.38173080347895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a0c20267dc3%3A0x95430c844fde51f7!2sSihlquai%2041%2C%208005%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091827595!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Krone Zürich Altstetten',
            'address' => 'Feldblumenstrasse 7, 8048 Zürich',
            'ev_charging' => false,
            'blocked_until' => '2023-11-29 18:45:00',
            'latitude' => 47.388117, 
            'longitude' => 8.483096,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.258079113526!2d8.482840576301655!3d47.387397203088995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900bc625e59705%3A0xd93b16f7334045d5!2sLindenpl.%205%2C%208048%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091895409!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Zürich P-West',
            'address' => 'Förrlibuckstrasse 151, 8005 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.392096,
            'longitude' => 8.510372,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.5595932654646!2d8.535039976301329!3d47.381513503493856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a0c1ff5f3f7%3A0xe904511b2c2cb978!2sSihlquai%2041%2C%208005%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091955157!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Pfingstweid',
            'address' => 'Pfingstweidstrasse 1, 8005 Zürich',
            'ev_charging' => false,
            'blocked_until' => '2023-11-30 20:15:00',
            'latitude' => 47.387607, 
            'longitude' => 8.518094,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.0531109162685!2d8.505094276301874!3d47.391396602813806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a4900ac0543%3A0x173207a30b51ee78!2sPfingstweidstrasse%20106%2C%208005%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701091993890!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Hard Turm Park',
            'address' => 'Pfingstweidstrasse 104, 8005 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.391479,
            'longitude' =>  8.509131,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.9217720487854!2d8.533973476302997!3d47.41346700129452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a8e81afcb1f%3A0x956a6bed7783a02a!2sBrown-Boveri-Strasse%202%2C%208050%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701092028520!5m2!1sen!2sch',
        ],
        [
            'user_id' => null,
            'name' => 'Parkhaus Hardau II',
            'address' => 'Bullingerstrasse 73, 8004 Zürich',
            'ev_charging' => true,
            'blocked_until' => null,
            'latitude' => 47.381504, 
            'longitude' => 8.509771,
            'map_frame' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.5656707090898!2d8.507208276301307!3d47.38139490350202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a3af5e1e499%3A0xb7febd175157bffe!2sParkhaus%20Hardau%20II%2C%20Bullingerstrasse%2073%2C%208004%20Z%C3%BCrich!5e0!3m2!1sen!2sch!4v1701092078537!5m2!1sen!2sch',
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
                "map_frame" => $parkingSpot['map_frame'],
            ]);
        }
    }
}
