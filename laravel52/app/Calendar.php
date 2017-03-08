<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model {
    public static function getCalendar() {
        $holiday[] = array(2017, 1, 1, "元旦");
        $holiday[] = array(2017, 2, 28, "和平紀念日");
        $holiday[] = array(2017, 3, 8, "婦女節");

        return $holiday;
    }
}