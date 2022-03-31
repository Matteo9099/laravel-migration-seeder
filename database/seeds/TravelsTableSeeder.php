<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new Travel();

        $travel->reference ='159357';
        $travel->name = 'Toffain Agency';
        $travel->address = 'via Roma 10';
        $travel->phone = 065555555;
        $travel->hotel = 'Blu Marilù';
        $travel->apparments = '68';
        $travel->destination = 'Genova, Italy';
        $travel->offers = '15%';

        $travel->save();

    }
}
