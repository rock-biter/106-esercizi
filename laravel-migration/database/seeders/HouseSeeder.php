<?php

namespace Database\Seeders;

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i = 0; $i < 100; $i++) {
            $new_house = new House();

            $new_house->reference = $faker->unique()->bothify('???#####');
            $new_house->address = $faker->streetAddress();
            $new_house->city = $faker->city();
            $new_house->postal_code = $faker->bothify('#####');
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(30, 1000);
            $new_house->rooms = $faker->numberBetween(2, 30);
            $new_house->bathrooms = $faker->numberBetween(1, 5);
            $new_house->price = $faker->randomFloat(2, 20000, 99999999);
            $new_house->energy_rating = $faker->randomElement(['AAA', 'AA', 'A', 'B', 'C', 'D', 'E', 'G']);
            $new_house->country = $faker->country();
            $new_house->description = $faker->optional()->paragraphs($faker->numberBetween(1, 5), true);
            $new_house->notes = $faker->optional()->paragraphs($faker->numberBetween(1, 5), true);
            $new_house->is_available = $faker->randomElement([false, true]);


            // var_dump($new_house);
            $new_house->save();
        }

        // $houses = [
        //     [
        //         'reference' => 'AGD45637',
        //         'address' => 'Via di la, 54',
        //         'city' => 'Ferrara',
        //         'postal_code' => '44120',
        //         'state' => 'FE',
        //         'square_meters' => 150,
        //         'rooms' => 5,
        //         'bathrooms' => 1,
        //         'price' => 420000,
        //         'energy_rating' => 'G',
        //     ],
        //     [
        //         'reference' => 'AGD78569',
        //         'address' => 'Via del tutto eccezionale, 121',
        //         'city' => 'Copparo',
        //         'postal_code' => '44120',
        //         'state' => 'FE',
        //         'square_meters' => 220,
        //         'rooms' => 7,
        //         'bathrooms' => 2,
        //         'price' => 350000,
        //         'energy_rating' => 'F'
        //     ],
        //     [
        //         'reference' => 'AGD00213',
        //         'address' => 'Via vai, 623',
        //         'city' => 'Bologna',
        //         'postal_code' => '65269',
        //         'state' => 'BO',
        //         'square_meters' => 75,
        //         'rooms' => 3,
        //         'bathrooms' => 1,
        //         'price' => 640000,
        //         'energy_rating' => 'C'
        //     ],
        //     [
        //         'reference' => 'AGD45889',
        //         'address' => 'Via ciao ciao, 54',
        //         'city' => 'Parigi',
        //         'postal_code' => '44120',
        //         'state' => 'PA',
        //         'country' => 'Francia',
        //         'square_meters' => 30,
        //         'rooms' => 2,
        //         'bathrooms' => 1,
        //         'price' => 720000,
        //         'energy_rating' => 'A'
        //     ],
        // ];

        // foreach ($houses as $house) {
        //     $new_house = new House();

        //     $new_house->reference = $house['reference'];
        //     $new_house->address = $house['address'];
        //     $new_house->city = $house['city'];
        //     $new_house->postal_code = $house['postal_code'];
        //     $new_house->state = $house['state'];
        //     $new_house->square_meters = $house['square_meters'];
        //     $new_house->rooms = $house['rooms'];
        //     $new_house->bathrooms = $house['bathrooms'];
        //     $new_house->price = $house['price'];
        //     $new_house->energy_rating = $house['energy_rating'];
        //     if (isset($house['country'])) {
        //         $new_house->country = $house['country'];
        //     }

        //     // var_dump($new_house);
        //     $new_house->save();
        // }
    }
}
