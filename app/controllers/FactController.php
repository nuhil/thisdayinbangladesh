<?php

use Carbon\Carbon;

class FactController extends BaseController {

    public function getIndex($month = null, $day = null, $type = null)
    {
        $today = Day::where('day', '=', $day.'-'.$month)->first()->toArray();
        $facts = Day::find($today['id'])->facts;
        $allFacts = array();
        
        $i = 0;
        foreach ($facts as $fact):
            $allFacts['facts'][$i] = $fact->toArray();
            $allFacts['facts'][$i]['types'] = $fact->types->toArray();
        endforeach;
        $i++;

        $thisDay = array ('day' => $day, 'month' => date("F", mktime(0, 0, 0, $month, 10)));
        
        return View::make('eventlisting', array('facts' => $allFacts, 'today' => $thisDay));

    }

    public function postFact()
    {
        //
    }

}