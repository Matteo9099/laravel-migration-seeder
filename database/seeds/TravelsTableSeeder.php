<?php

use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) // dependency injection
    {

        for($i=0; $i<10; $i++){


            $travel = new Travel();
    
            $travel->reference = $faker->bothify('?????-#####');
            $travel->name = $faker->words(3, true);
            $travel->address = $faker->words(4, true);
            $travel->phone =$faker->randomNumber(3, false);
            $travel->hotel = $faker->words(4, true);
            $travel->appartments = $faker->randomNumber(3, false);
            $travel->destination = $faker->bothify('?????,?????');
            $travel->offers = $faker->randomNumber(2, false) . '%';
            $travel->period = $faker->date();
    
            $travel->save();

        }


    

        


    }


}
