<?php
 
class FactTableSeeder extends Seeder {
 
    public function run()
    {        
        for ($i = 1; $i <= 400; $i++) {
                Fact::create(array(
                    'day_id' => $i,
                    'title'   => 'Fact-'.$i,
                    'description' => 'Description of fact-'.$i,
                ));
        }

    }
 
}