<?php
ini_set("display_errors", "On"); // ��ܿ��~�O�_���}( On=�}, Off=�� )
error_reporting(E_ALL & ~E_NOTICE);

$db = new SQLite3('mydb.db');

// $sql = 'CREATE TABLE test (
		// id INTEGER PRIMARY KEY,
		// fname TEXT,
		// lname TEXT,
		// tel TEXT
// )';

// $db->query($sql);

// $sql = 'INSERT INTO test (fname, lname, tel)'.
		// 'VALUES ("troy", "white", "0000")';

// $db->query($sql);

$sql = 'SELECT * FROM test';

$res = $db->query($sql);

while ($row = $res->fetchArray()){
	echo $row['fname'].$row['lname'].$row['tel'];
}
?>