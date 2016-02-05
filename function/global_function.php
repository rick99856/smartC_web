<?php

require_once("./db_connect/db_connect.php");
require_once("./db_connect/sql.php");

/*
sqlQry( $cmd , $array );
	資料查詢
傳入參數：
	$cmd：SQL指令，string   ex： SELECT * FROM TableName WHERE ColNameA = ? AND ColNameB = ? OR ColNameC = ?
	$array：陣列參數  		ex： array('A','B','C')
傳出參數：
	SQL result array：SQL query集合fetch()後的陣列 ex：array[N]["ColName"]
*/
function sqlQry( $sql, $sql_array ){
	global $db;

	$sth = $db -> prepare($sql);
	$sth -> execute($sql_array);
	if( $sth -> errorCode() != '00000' ){
		$error = $sth -> errorInfo();
		// echo "Error : ".$error[2];
		return false;
	}
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	$result = filter_var_array($sth -> fetchAll(), FILTER_SANITIZE_MAGIC_QUOTES);
	if( count($result) == 0 )
		$result = array();

	return $result;
}


/*
sqlEdit( $cmd , $array );
	資料寫入、更新與刪除
傳入參數：
	$cmd：SQL指令，string	ex： UPDATE TableName SET ColNameA = ? WHERE ColNameB = ? OR ColNameC = ?
	$array：陣列參數  		ex： array('A','B','C')
傳出參數：
	ture or false 
*/
function sqlEdit( $sql, $sql_array ){
	global $db;
	$sql = "select * FROM view2";
	//$sql_exec = $db->exec( $cmd );

	$sth = $db -> prepare($sql);
	// $sth -> execute($sql_array);
	$sth -> execute();
	while($row = $sth->fetch()){
// 　		echo $row;
	}
	if( $sth -> errorCode() != '00000' ){
		$error = $sth -> errorInfo();
		//echo "Error : ".$error[2];
		return false;
		print_r("false");
	}
	// print_r($sth);
	return true;
	print_r("true");
}

