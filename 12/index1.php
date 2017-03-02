<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

/**
 * model
 * 假日
 */
class Holiday {
    private $holiday;

    //產生所有假日的陣列
    function __construct() {
        $this->holiday[] = array(2017, 1, 1, "元旦");
        $this->holiday[] = array(2017, 2, 28, "和平紀念日");
    }

    //提供查找的方法
    function isHoliday($y, $m, $d) {
        $arr[0] = 0;
        $arr[1] = 0;
        $arr[2] = 0;
        $arr[3] = "";
        foreach ($this->holiday as $key => $value) {
            if ($value[0] == $y && $value[1] == $m && $value[2] == $d) {
                $arr[0] = $value[0];
                $arr[1] = $value[1];
                $arr[2] = $value[2];
                $arr[3] = $value[3];
            }
        }
        return $arr;
    }
}

/**
 * model
 * <td>字串物件
 */
class Td {
    static $td = "<td>";

    static function noDate() {
        return "<td class='noDateColor'>";
    }

    static function weekend() {
        return "<td class='weekendColor'>";
    }

    static function today() {
        return "<td class='today'>";
    }

    static function holiday() {
        return "<td class='holiday'>";
    }
}

/**
 * model
 * input按鈕字串物件
 */
class Btn {
    static function newBtn($iYear, $iMon, $value) {
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
}

/**
 * model
 * 建構基礎html版面
 */
class Html {
    function __construct($iYear, $iMon, $iDate) {
        $this->year = $iYear;
        $this->mon = $iMon;
        $this->date = $iDate;
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

    function table() {
        $html[] = "<table class='table font24'>";
        $html[] = "<tr class='titleColor'>";
        $html[] = "<th colspan='7'>";
        $html[] = $this->year . "年" . $this->mon . "月";
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

    function content($data) {
        return $data . "\n</table>";
    }

    function foot() {
        $html[] = "</body>";
        $html[] = "</html>";
        return implode("\n", $html);
    }
}

/**
 * comtrol
 * 從model拿出需要的內容組合出view需要呈現的畫面
 */
class Ctrl {
    function __construct() {
        ($_REQUEST['y'] == '') ? $this->year = date('Y') : $this->year = $_REQUEST['y'];
        ($_REQUEST['m'] == '') ? $this->mon = date('n') : $this->mon = $_REQUEST['m'];
        ($_REQUEST['d'] == '') ? $this->date = date('j') : $this->date = $_REQUEST['d'];
        //$this->a 自訂html樣板物件，各方法的回傳值為字串
        $this->a = new Html($this->year, $this->mon, $this->date);
        $html[] = $this->a->head();
        $html[] = $this->a->table();
        $html[] = $this->createTable();
        $html[] = $this->createBtn();
        $html[] = $this->a->foot();

        $this->html = implode("\n", $html);
    }

    function createTable() {
        // 用php函式取得該月有幾天
        // 計算現在這個月有多少天，利用下一個月得知這個月共有幾天，存$lastday
        $monDays = date('d', mktime(0, 0, 0, $this->mon + 1, 0, $this->year));
        // 組合第一周要空幾天
        $noDate = date('w', mktime(0, 0, 0, $this->mon, 1, $this->year));
        // 組合需要多少空格來放日期
        $all = ($noDate + $monDays);
        if ($all == 28) {
            $cell = 28;
        } else if ($all > 28 && $all <= 35) {
            $cell = 35;
        } else if ($all > 35 && $all <= 42) {
            $cell = 42;
        }
        // 建立Holiday物件
        $holiday = new Holiday;
        // 產生空格來放日期
        for ($i = 1; $i <= $cell; $i++) {
            $iDays = $i - $noDate; // 迴圈產生需要多少空格來用，再組合出日期填入格子
            if ($i % 7 == 1) {
                $html[] = "<tr class ='trColor'>";
            }
            //判斷日期給予不同的樣式
            if ($iDays <= 0 || $iDays > $monDays) {
                $html[] = Td::noDate();
            } elseif ($this->year == date('Y') && $this->mon == date('n') && $iDays == date('j')) {
                $html[] = Td::today();
            } elseif ($this->year == $holiday->isHoliday($this->year, $this->mon, $iDays)[0] &&
                $this->mon == $holiday->isHoliday($this->year, $this->mon, $iDays)[1] &&
                $iDays == $holiday->isHoliday($this->year, $this->mon, $iDays)[2]
            ) {
                $html[] = Td::holiday();
            } elseif ($i % 7 == 1 || $i % 7 == 0) {
                $html[] = Td::weekend();
            } else {
                $html[] = Td::$td;
            }
            //填入日期
            if ($iDays >= 1 && $iDays <= $monDays) {
                $html[] = $iDays;
            }
            //檢查是否為某個節日，是的話加上該節日的名稱
            if ($this->year == $holiday->isHoliday($this->year, $this->mon, $iDays)[0] &&
                $this->mon == $holiday->isHoliday($this->year, $this->mon, $iDays)[1] &&
                $iDays == $holiday->isHoliday($this->year, $this->mon, $iDays)[2]
            ) {
                $html[] = "<div class='font12'>";
                $html[] = $holiday->isHoliday($this->year, $this->mon, $iDays)[3];
                $html[] = "</div>";
            }
            $html[] = "</td>";

            if ($i % 7 == 0) {
                $html[] = "</tr>";
            }
        }
        return $this->a->content(implode("\n", $html));
    }

    function createBtn() {
        $html[] = Btn::newBtn($this->year, $this->mon, "上一年");
        $html[] = Btn::newBtn($this->year, $this->mon, "下一年");
        $html[] = Btn::newBtn($this->year, $this->mon, "上個月");
        $html[] = Btn::newBtn($this->year, $this->mon, "下個月");
        return implode("\n", $html);
    }

    function getHtml() {
        return $this->html;
    }
}

/*
 * view
 * 處理畫面輸出
 */
$html = new Ctrl;
echo $html->getHtml();

?>