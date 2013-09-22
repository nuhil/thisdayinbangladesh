<?php
 
class Fact extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facts';
    
    /*
     * A Fact belongs to a Day
     */
    public function day()
    {
        return $this->belongsTo('Day');
    }
    
    /**
     * A Fact belongs to many Types
     */
    public function types()
    {
      return $this->belongsToMany('Type');
    }        
     
}