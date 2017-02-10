<?php
// *輸入SQLite語法
function inputSyntax(){
	$inputSyntax[]='<form action="index.php" method="post">';
	$inputSyntax[]='<p>輸入語法：<input type="text" name="syntax" /></p>';
	$inputSyntax[]='<input type="submit" value="送出">';
	$inputSyntax[]='</form>';
	$inputSyntax = implode("",$inputSyntax);
	return $inputSyntax;
}
// *執行語法
/*
*如果輸入LIST DB，執行XX
*如果輸入LIST TABLE，執行XX
*/
function runSyntax(){
	$syntax = $_POST['syntax'];
	if ($syntax !== null){
		$db = new SQLite3('test01');
		$query = $db->query($syntax);
		// while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
			// echo $table['name'] . '<br />';
		// }
		$db->close();
	}
}
// *顯示輸入的語法
function outputSyntax(){
	$syntax = $_POST['syntax'];
	if ($syntax !== null){
		// while ($table = $query->fetchArray(SQLITE3_ASSOC)) {
			// echo $table['name'] . '<br />';
		// }
		return $syntax;
	}
}
// *顯示結果
function showData(){
	
}
?>