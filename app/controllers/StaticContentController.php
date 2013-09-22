<?php

class StaticContentController extends BaseController {

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {

    }
    
    public function about () {
        $presentTime = explode('-', \Carbon\Carbon::now()->toDateString());
        $thisDay = array ('day' => $presentTime[2], 'month' => date("F", mktime(0, 0, 0, $presentTime[1], 10)));
        
        return View::make('about', array('today' => $thisDay));
    }

}
