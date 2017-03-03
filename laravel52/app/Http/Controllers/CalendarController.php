<?php

namespace App\Http\Controllers;

use App\Calendar;

class CalendarController extends Controller {
    public function index($y = null, $m = null, $d = null) {
        if ($y == null) $y = date('Y');
        if ($m == null) $m = date('n');
        if ($d == null) $d = date('j');
        // 用php函式取得該月有幾天
        // 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存$lastday
        $monDays = date('d', mktime(0, 0, 0, $m + 1, 0, $y));
        // 組合第一周要空幾天
        $noDate = date('w', mktime(0, 0, 0, $m, 1, $y));
        // 組合需要多少空格來放日期
        $all = ($noDate + $monDays);
        if ($all == 28) {
            $cell = 28;
        } else if ($all > 28 && $all <= 35) {
            $cell = 35;
        } else if ($all > 35 && $all <= 42) {
            $cell = 42;
        } else {
            $cell = 0;
        }
        Calendar::getCalendar();
        return view('calendar/index', [
            'y' => $y,
            'm' => $m,
            'd' => $d,
            "monDays" => $monDays,
            "noDate" => $noDate,
            "cell" => $cell
        ]);
    }
}