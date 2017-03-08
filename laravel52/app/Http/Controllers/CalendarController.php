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
        // 該月日期陣列
        for ($i = 1; $i <= $cell; $i++) {
            $iDays[] = $i - $noDate;
        }
        // 按鈕參數
        $iYear_p = $y - 1;
        $iYear_n = $y + 1;
        $iMon_p = $m - 1;
        if ($iMon_p % 12 == 0) {
            $iMon_p = 12;
        } else {
            $iMon_p = ($m - 1) % 12;
        }
        $iMon_n = $m + 1;
        if ($iMon_n % 12 == 0) {
            $iMon_n = 12;
        } else {
            $iMon_n = ($m + 1) % 12;
        }
        // 超過12月或1月需要跨年
        $iYear_2 = $y;
        if ($m == 12) $iYear_2++;
        $iYear_1 = $y;
        if ($m == 1) $iYear_1--;
        return view('calendar/index', [
            'y' => $y,
            'm' => $m,
            'd' => $d,
            "iDays" => $iDays,
            "monDays" => $monDays,
            "holiday" => Calendar::getCalendar(),
            "iYear_p"=>$iYear_p,
            "iYear_n"=>$iYear_n,
            "iYear_2"=>$iYear_2,
            "iYear_1"=>$iYear_1,
            "iMon_p"=>$iMon_p,
            "iMon_n"=>$iMon_n
        ]);
    }
}