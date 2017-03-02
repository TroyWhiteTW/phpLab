<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

echo init();

//主程式進入點，由頭部、內容、跳轉按鈕、底部區塊組成
function init() {
    // 取得年月日的參數
    // 如果沒有從手動輸入參數則使用系統預設時間
    ($_REQUEST['y'] == '') ? $iYear = date('Y') : $iYear = $_REQUEST['y'];
    ($_REQUEST['m'] == '') ? $iMon = date('n') : $iMon = $_REQUEST['m'];
    ($_REQUEST['d'] == '') ? $iDate = date('j') : $iDate = $_REQUEST['d'];
    $html[] = head();
    $html[] = tableHead($iYear, $iMon);
    $html[] = tableContent($iYear, $iMon);
    $html[] = "</table>";
    $html[] = createBtn($iYear, $iMon);
    $html[] = foot();
    return implode("\n", $html);
}

/*
 * 取得年月日
 */
function getymd() {
    ($_REQUEST['y'] == '') ? $iYear = date('Y') : $iYear = $_REQUEST['y'];
    ($_REQUEST['m'] == '') ? $iMon = date('n') : $iMon = $_REQUEST['m'];
    ($_REQUEST['d'] == '') ? $iDate = date('j') : $iDate = $_REQUEST['d'];
    $arr = array('y' => $iYear,
        'm' => $iMon,
        'd' => $iDate);
    return $arr;
}

function head() {
    $html[] = "<html>";
    $html[] = "<head>";
    $html[] = "<title>月曆</title>";
    $html[] = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
    $html[] = "<link rel='stylesheet' href='style.css'>";
    $html[] = "</head>";
    $html[] = "<body>";
    return implode("\n", $html);
}

function tableHead($iYear, $iMon) {
    $html[] = "<table class='table font24'>";
    $html[] = "<tr class='titleColor'>";
    $html[] = "<th colspan='7'>";
    $html[] = $iYear . "年" . $iMon . "月";
    $html[] = "</th>";
    $html[] = "</tr>";
    $html[] = "<tr class ='trColor'>";
    $html[] = "<th class ='weekendColor'>日</th>";
    $html[] = "<th>一</th>";
    $html[] = "<th>二</th>";
    $html[] = "<th>三</th>";
    $html[] = "<th>四</th>";
    $html[] = "<th>五</th>";
    $html[] = "<th class ='weekendColor'>六</th>";
    $html[] = "</tr>";
    return implode("\n", $html);
}

/*
 * 輸入 年 -> $iYear
 * 輸入 月 -> $iMon
 * 用php函式取得該月有幾天
 * 組合第一周要空幾天
 * 計算需要多少空格來放日期
 * 產生日期的html，並依照不同情況給予不同的樣式
 * 輸出 月曆表格中段的html字串
 */
function tableContent($iYear, $iMon) {
    // 用php函式取得該月有幾天
    // 計算現在這個月有多少天，利用下一個月得知這個月共有幾天
//    $nextmonth = $iMon + 1;
//    $lastday = mktime(0, 0, 0, $nextmonth, 0, $iYear);
//    $monDays = date('d', $lastday);
    $monDays = date('d', mktime(0, 0, 0, $iMon + 1, 0, $iYear));
    // 組合第一周要空幾天
//    $firstday = mktime(0, 0, 0, $iMon, 1, $iYear);
//    $noDate = date('w', $firstday);
    $noDate = date('w', mktime(0, 0, 0, $iMon, 1, $iYear));

    // 計算需要多少空格來放日期
    $all = ($noDate + $monDays);
    if ($all == 28) {
        $cell = 28;
    } else if ($all > 28 && $all <= 35) {
        $cell = 35;
    } else if ($all > 35 && $all <= 42) {
        $cell = 42;
    }

    // 產生日期的html，並依照不同情況給予不同的樣式
    for ($i = 1; $i <= $cell; $i++) {
        //格子與日期的換算
        $iDays = $i - $noDate;
        //週日加上tr
        if ($i % 7 == 1) {
            $html[] = "<tr class ='trColor'>";
        }
        //判斷日期給予不同的樣式
        if ($iDays <= 0 || $iDays > $monDays) {
            $html[] = "<td class='noDateColor'>";
        } else if ($iYear == date('Y') && $iMon == date('n') && $iDays == date('j')) {
            $html[] = "<td class='today'>";
        } else if ($iYear == isHoliday($iYear, $iMon, $iDays)["year"] &&
            $iMon == isHoliday($iYear, $iMon, $iDays)["mon"] &&
            $iDays == isHoliday($iYear, $iMon, $iDays)["date"]
        ) {
            $html[] = "<td class='holiday'>";
        } else if ($i % 7 == 1 || $i % 7 == 0) {
            $html[] = "<td class='weekendColor'>";
        } else {
            $html[] = "<td>";
        }
        //填入日期
        if ($iDays >= 1 && $iDays <= $monDays) {
            $html[] = $iDays;
        }
        //檢查是否為某個節日，是的話加上該節日的名稱
        if ($iYear == isHoliday($iYear, $iMon, $iDays)["year"] &&
            $iMon == isHoliday($iYear, $iMon, $iDays)["mon"] &&
            $iDays == isHoliday($iYear, $iMon, $iDays)["date"]
        ) {
            $html[] = "<div class='font12'>";
            $html[] = isHoliday($iYear, $iMon, $iDays)["holiday"];
            $html[] = "</div>";
        }
        $html[] = "</td>";
        //週六加上/tr
        if ($i % 7 == 0) {
            $html[] = "</tr>";
        }
    }
    return implode("\n", $html);

}

/*
 * 輸入 年 -> $iYear
 * 輸入 月 -> $iMon
 * 輸出 按鈕的html字串
 */
function createBtn($iYear, $iMon) {
    $html[] = newBtn($iYear, $iMon, "上一年");
    $html[] = newBtn($iYear, $iMon, "下一年");
    $html[] = newBtn($iYear, $iMon, "上個月");
    $html[] = newBtn($iYear, $iMon, "下個月");
    return implode("\n", $html);
}

/*
 * 輸入 年 -> $iYear
 * 輸入 月 -> $iMon
 * 輸入 按鈕的文字 -> $value
 * 輸出 按鈕的html字串
 */
function newBtn($iYear, $iMon, $value) {
    // 拿到年月的參數
    // 點按鈕+1或-1
    // 處理參數留到後面做出按鈕時使用
    $iYear_p = $iYear - 1;
    $iYear_n = $iYear + 1;
    $iMon_p = $iMon - 1;
    if ($iMon_p % 12 == 0) {
        $iMon_p = 12;
    } else {
        $iMon_p = ($iMon - 1) % 12;
    }
    $iMon_n = $iMon + 1;
    if ($iMon_n % 12 == 0) {
        $iMon_n = 12;
    } else {
        $iMon_n = ($iMon + 1) % 12;
    }
    // 超過12月或1月需要跨年
    $iYear_2 = $iYear;
    if ($iMon == 12) {
        $iYear_2++;
    }
    $iYear_1 = $iYear;
    if ($iMon == 1) {
        $iYear_1--;
    }
    //產生按鈕的html樣板
    $html[] = "<input type='button' value='";
    $html[] = $value;
    $html[] = "' class='";
    switch ($value) {
        case '上一年':
            $html[] = "btn_y_p button1";
            break;
        case '下一年':
            $html[] = "btn_y_n button1";
            break;
        case '上個月':
            $html[] = "btn_m_p button2";
            break;
        case '下個月':
            $html[] = "btn_m_n button2";
            break;
    };
    $html[] = "' onclick='location.href=\"";
    $html[] = "index.php?y=";
    switch ($value) {
        case '上一年':
            $html[] = $iYear_p;
            break;
        case '下一年':
            $html[] = $iYear_n;
            break;
        case '上個月':
            $html[] = $iYear_1;
            break;
        case '下個月':
            $html[] = $iYear_2;
            break;
    };
    $html[] = "&m=";
    switch ($value) {
        case '上一年':
            $html[] = $iMon;
            break;
        case '下一年':
            $html[] = $iMon;
            break;
        case '上個月':
            $html[] = $iMon_p;
            break;
        case '下個月':
            $html[] = $iMon_n;
            break;
    };
    $html[] = "\"' />";
    return implode("", $html);
}

function foot() {
    $html[] = "</body>";
    $html[] = "</html>";
    return implode("\n", $html);
}

/*
 * 存放假日的陣列
 * 輸出 假日陣列
 */
function holiday() {
    $holiday[] = array("year" => 2017,
        "mon" => 1,
        "date" => 1,
        "holiday" => "元旦");
    $holiday[] = array("year" => 2017,
        "mon" => 2,
        "date" => 28,
        "holiday" => "和平紀念日");
    return $holiday;
}

/*
 * 輸入 年 -> $y
 * 輸入 月 -> $m
 * 輸入 日 -> $d
 * 從 holiday() 檢查該年月日是否為假日
 * 輸出 該日的是否為假期的資訊陣列 -> $arr
 * $arr[0] -> 年
 * $arr[1] -> 月
 * $arr[2] -> 日
 * $arr[3] -> 假日名稱
 */
function isHoliday($y, $m, $d) {
    $holiday = holiday();
    $arr["year"] = 0;
    $arr["mon"] = 0;
    $arr["date"] = 0;
    $arr["holiday"] = "";
    foreach ($holiday as $key => $value) {
        if ($value["year"] == $y && $value["mon"] == $m && $value["date"] == $d) {
            $arr["year"] = $value["year"];
            $arr["mon"] = $value["mon"];
            $arr["date"] = $value["date"];
            $arr["holiday"] = $value["holiday"];
        }
    }
    return $arr;
}

?>