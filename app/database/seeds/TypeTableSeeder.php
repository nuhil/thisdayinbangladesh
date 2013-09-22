<?php
 
class TypeTableSeeder extends Seeder {
 
    public function run()
    {        
        $types = array ('good', 'bad', 'revolutionary', 'birth', 'death');
        
        foreach ($types as $key=>$value) {
                Type::create(array(
                    'type' => $value,
                ));
        }

    }
 
}