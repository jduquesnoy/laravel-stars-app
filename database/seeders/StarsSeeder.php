<?php
namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class StarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creation of 20 models Star for exhibition thanks to PHPFAKER
        for ($i = 0; $i < 20; $i++) {
            $star = New \App\Models\Star();
            $faker = Faker::create();
            $star->firstname = $faker->firstName;
            $star->lastname = $faker->lastName;
            $star->description = $faker->text($maxNbChars = 350) ;
            $star->photo = $faker->imageUrl($width=250, $height=250, 'people');
            $star->save();
        }
    }
}
