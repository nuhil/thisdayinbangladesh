<?php
 
class Day extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'days';
    public $timestamps = false;
    
    /*
     * A Day has many Facts
     */
    public function facts()
    {
        return $this->hasMany('Fact');
    }
     
}