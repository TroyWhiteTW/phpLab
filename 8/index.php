<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

echo init();

//主程式進入點，由頭部、內容、底部區塊組成
function init() {
	$html[] = head();
	$html[] = content();
	$html[] = foot();
	return implode("\n", $html);
}
//html開頭部分
function head() {
	$html[] = "<html>";
	$html[] = "<head>";
	$html[] = "<title>月曆</title>";
	$html[] = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$html[] = "<style>";
	$html[] = ".table {width:726;height:614;margin-left:auto;margin-right:auto;text-align:center;}";
	$html[] = ".titleColor {background-color:#c69fba;}";
	$html[] = ".trColor {background-color:#fae6ff;}";
	$html[] = ".weekendColor {background-color:#ffdbdd;}";
	$html[] = ".noDateColor {background-color:#f6f2f7;}";
	$html[] = ".font {font-size:24px;}</style>";
	$html[] = "</head>";
	$html[] = "<body>";
	$html[] = "<table class='table font'>";
	$html[] = "<tr class='titleColor'>";
	$html[] = "<th colspan='7'>2017年02月</th>";
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
//內容，組成月曆的格子以及計算方式
function content() {
	for ($j = 0; $j < 5; $j++) {
		$html[] = "<tr class ='trColor'>";
		for ($i = 0; $i < 7; $i++) {
			$k = $j * 7 + $i - 2;
			if ($k <= 0 || $k >= 29) {
				$html[] = "<td class='noDateColor'>";
			} elseif ($k % 7 == 4 || $k % 7 == 5) {
				$html[] = "<td class='weekendColor'>";
			} else {
				$html[] = "<td>";
			}
			if ($k >= 1 && $k <= 28) {
				$html[] = $k;
			}
			$html[] = "</td>";
		}
		$html[] = "</tr>";
	}
	return implode("\n", $html);
}
//html結尾
function foot() {
	$html[] = "</table>";
	$html[] = "</body>";
	$html[] = "</html>";
	return implode("\n", $html);
}
?>