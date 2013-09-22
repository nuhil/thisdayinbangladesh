<?php
 
class DayTableSeeder extends Seeder {
 
    public function run()
    {        
        for ($i = 1; $i <= 31; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                Day::create(array(
                    'day' => sprintf("%02s", $i).'-'.sprintf("%02s", $j)
                ));             
            }
        }

    }
 
}