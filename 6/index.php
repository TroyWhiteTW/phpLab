<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);
$html[] = "<html><head><title>月曆</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'><style>.table {width:726;height:614;margin-left:auto;margin-right:auto;text-align:center}.titleColor {background-color:#c69fba;}.trColor {background-color:#fae6ff;}.weekendColor {background-color:#ffdbdd;}.noDateColor {background-color:#f6f2f7;}.font {font-size:24px;}</style></head><body><table class='table font'><tr class='titleColor'><th colspan='7'>2017年02月</th></tr><tr class ='trColor'><th class ='weekendColor'>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th class ='weekendColor'>六</th></tr>";
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
$html[] = "</table></body></html>";
echo implode("", $html);
?>