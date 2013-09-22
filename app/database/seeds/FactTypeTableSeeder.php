<?php
 
class FactTypeTableSeeder extends Seeder {
 
    public function run()
    {        
        for ($i = 1; $i <= 10; $i++) {
            FactType::create(array(
                'fact_id' => $i,
                'type_id' => rand(1,5)
            ));             
        }

    }
 
}