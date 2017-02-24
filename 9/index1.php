<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

/**
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
}

/**
 * 建構基礎html版面
 */
class Html {
	function __construct() {
		$html[] = "<html>";
		$html[] = "<head>";
		$html[] = "<title>月曆</title>";
		$html[] = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
		$html[] = "<link rel='stylesheet' href='style.css'>";
		$html[] = "</head>";
		$html[] = "<body>";
		$html[] = "<table class='table font'>";
		$html[] = "<tr class='titleColor'>";
		$html[] = "<th colspan='7'>";
		$html[] = $this->title();
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
		$this->html = implode("\n", $html);
	}
	function title() {
		return "2017年02月";
	}
	function content() {
		$html[] = $this->html;
		for ($j = 0; $j < 5; $j++) {
			$html[] = "<tr class ='trColor'>";
			for ($i = 0; $i < 7; $i++) {
				$k = $j * 7 + $i - 2;
				if ($k <= 0 || $k >= 29) {
					$html[] = Td::noDate();
				} elseif ($k % 7 == 4 || $k % 7 == 5) {
					$html[] = Td::weekend();
				} else {
					$html[] = Td::$td;
				}
				if ($k >= 1 && $k <= 28) {
					$html[] = $k;
				}
				$html[] = "</td>";
			}
			$html[] = "</tr>";
		}
		$html[] = "</table>";
		$html[] = "</body>";
		$html[] = "</html>";
		$this->html = implode("\n", $html);
	}
	function getHtml() {
		$this->content();
		return $this->html;
	}
}

$html = new Html;
echo $html->getHtml();

?>