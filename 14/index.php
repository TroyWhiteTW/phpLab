<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

/**
 * model
 * 假日
 */
function holiday() {
    $holiday[] = array(2017, 1, 1, "元旦");
    $holiday[] = array(2017, 2, 28, "和平紀念日");
    return $holiday;
}

//提供查找的方法
function isHoliday($y, $m, $d) {
    $holiday = holiday();
    $arr[0] = 0;
    $arr[1] = 0;
    $arr[2] = 0;
    $arr[3] = "";
    foreach ($holiday as $key => $value) {
        if ($value[0] == $y && $value[1] == $m && $value[2] == $d) {
            $arr[0] = $value[0];
            $arr[1] = $value[1];
            $arr[2] = $value[2];
            $arr[3] = $value[3];
        }
    }
    return $arr;
}

/**
 * model
 * input按鈕字串物件
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
    $html[] = "index1.php?y=";
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

/**
 * comtrol
 * 從model拿出需要的內容組合出view需要呈現的畫面
 */
function ctrl() {
    ($_REQUEST['y'] == '') ? $y = date('Y') : $y = $_REQUEST['y'];
    ($_REQUEST['m'] == '') ? $m = date('n') : $m = $_REQUEST['m'];
    ($_REQUEST['d'] == '') ? $d = date('j') : $d = $_REQUEST['d'];
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
    // 建立按鈕物件
    $btn = array(
        newBtn($y, $m, "上一年"),
        newBtn($y, $m, "下一年"),
        newBtn($y, $m, "上個月"),
        newBtn($y, $m, "下個月")
    );

    $arr = array(
        "y" => $y,
        "m" => $m,
        "d" => $d,
        "monDays" => $monDays,
        "noDate" => $noDate,
        "cell" => $cell,
        "btn" => $btn
    );

    return $arr;
}

/**
 * view
 * 畫面輸出
 */
$ctrl = ctrl();
$y = $ctrl["y"];
$m = $ctrl["m"];
$d = $ctrl["d"];
$monDays = $ctrl["monDays"];
$noDate = $ctrl["noDate"];
$cell = $ctrl["cell"];
$btn = $ctrl["btn"];

$html[] = "<html>";
$html[] = "<head>";
$html[] = "<title>月曆</title>";
$html[] = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
$html[] = "<link rel='stylesheet' href='style.css'>";
$html[] = "</head>";
$html[] = "<body>";
$html[] = "<table class='table font24'>";
$html[] = "<tr class='titleColor'>";
$html[] = "<th colspan='7'>";
$html[] = $y . "年" . $m . "月";
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

// 產生空格來放日期
for ($i = 1; $i <= $cell; $i++) {
    $iDays = $i - $noDate; // 迴圈產生需要多少空格來用，再組合出日期填入格子
    if ($i % 7 == 1) {
        $html[] = "<tr class ='trColor'>";
    }
    //判斷日期給予不同的樣式
    if ($iDays <= 0 || $iDays > $monDays) {
        $html[] = "<td class='noDateColor'>";
    } elseif ($y == date('Y') && $m == date('n') && $iDays == date('j')) {
        $html[] = "<td class='today'>";
    } elseif ($y == isHoliday($y, $m, $iDays)[0] &&
        $m == isHoliday($y, $m, $iDays)[1] &&
        $iDays == isHoliday($y, $m, $iDays)[2]
    ) {
        $html[] = "<td class='holiday'>";
    } elseif ($i % 7 == 1 || $i % 7 == 0) {
        $html[] = "<td class='weekendColor'>";
    } else {
        $html[] = "<td>";
    }
    //填入日期
    if ($iDays >= 1 && $iDays <= $monDays) {
        $html[] = $iDays;
    }
    //檢查是否為某個節日，是的話加上該節日的名稱
    if ($y == isHoliday($y, $m, $iDays)[0] &&
        $m == isHoliday($y, $m, $iDays)[1] &&
        $iDays == isHoliday($y, $m, $iDays)[2]
    ) {
        $html[] = "<div class='font12'>";
        $html[] = isHoliday($y, $m, $iDays)[3];
        $html[] = "</div>";
    }
    $html[] = "</td>";

    if ($i % 7 == 0) {
        $html[] = "</tr>";
    }
}

$html[] = "</table>";
foreach ($btn as $value) {
    $html[] = $value;
}
$html[] = "</body>";
$html[] = "</html>";

echo implode("\n", $html);
?>