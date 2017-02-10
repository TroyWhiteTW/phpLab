<?php
ini_set("display_errors", "On"); // 顯示錯誤是否打開( On=開, Off=關 )
error_reporting(E_ALL & ~E_NOTICE);

main();
//做出可以輸入SQLite語法及顯示結果的地方
/*
*說明
*輸入SQLite語法
*顯示結果
*/
function main(){
// *說明
// *輸入SQLite語法
	$inputSyntax = inputSyntax();
	echo $inputSyntax;
	echo '<hr />';
// *顯示結果
	if ($_POST['syntax'] !== null){
		$syntax = $_POST['syntax'];
		echo $syntax;
		$db = new SQLite3('test01');
		$query = $db->query($syntax);
		// while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
			// echo $table['name'] . '<br />';
		// }
	}
}
// *輸入SQLite語法
function inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="post">';
	$inputSyntax[]='<p>輸入語法：<input type="text" name="syntax" /></p>';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("",$inputSyntax);
	return $inputSyntax;
}

?>