<?php
 
class Type extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'types';
    public $timestamps = false;
    
    /**
     * A Type belongs to many Facts
     */
    public function facts()
    {
      return $this->belongsToMany('Fact');
    }    
     
}