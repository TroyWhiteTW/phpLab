<?php
$html='';
main();
function main(){
	global $iYear, $iMon, $iDay, $html;
	$iYear = 1;
	$iMon = 2;
	$iDay = 3;
	$html = html($iYear,$iMon,$iDay);
}
function html($iYear,$iMon,$iDay){
	$html = $iYear+$iMon+$iDay;
	return $html;
}
echo $html;
?>