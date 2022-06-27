<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = 
        [
            [
                "company" => "ciao",
                "starting_station" => "oaic",
                "end_station" => "we",
                "starting_time" => "12:00:00",
                "arrival_time" => "13:00:00",
                "train_code" => "skkowv0re0r",
                "number_of_coaches" => 89,
                "is_on_time" => true,
                "is_canceled" => false,
            ],
            [
                "company" => "cierao",
                "starting_station" => "oaeric",
                "end_station" => "wwwe",
                "starting_time" => "11:00:00",
                "arrival_time" => "13:00:00",
                "train_code" => "skkowvrr0re0r",
                "number_of_coaches" => 76,
                "is_on_time" => true,
                "is_canceled" => false,
            ],
            
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->starting_station = $train['starting_station'];
            $newTrain->end_station = $train['end_station'];
            $newTrain->starting_time = $train['starting_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_coaches = $train['number_of_coaches'];
            $newTrain->is_on_time = $train['is_on_time'];
            $newTrain->is_canceled = $train['is_canceled'];
            $newTrain->save();
        }
        //dump($trains[0]);
        
    }
}
