<?php
$mysql_db_hostname = "192.168.137.178";
$mysql_db_user = "s13113241";
$mysql_db_password = "hs9m322x";
$mysql_db_database = "smartc";
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password);

if (!$con) {
 die('Could not connect: ' . mysql_error());
}
mysql_query("set names 'utf8'");
$value = $_GET['db'];
// $value = 'bab_nan';
// echo $value;
switch ($value) {
	case 'parking_nan_free':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;
     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['項次'] = $row['項次'];
		$json[$i]['行政區'] = $row['行政區'];
		$json[$i]['停車場名稱'] = $row['停車場名稱'];
		$json[$i]['位址'] = $row['位址'];
		$json[$i]['大型車(一般)'] = $row['大型車(一般)'];
		$json[$i]['小型車(一般)'] = $row['小型車(一般)'];
		$json[$i]['小型車(身障)'] = $row['小型車(身障)'];
		$json[$i]['小型車(婦幼)'] = $row['小型車(婦幼)'];
		$json[$i]['小型車(綠能)'] = $row['小型車(綠能)'];
		$json[$i]['小型車小計'] = $row['小型車小計'];
		$json[$i]['機車(一般)'] = $row['機車(一般)'];
		$json[$i]['機車(身障)'] = $row['機車(身障)'];
		$json[$i]['小型車(一般)'] = $row['小型車(一般)'];
		$json[$i]['機車小計'] = $row['機車小計'];
		$json[$i]['構造方式'] = $row['構造方式'];
		$json[$i]['收費費率'] = $row['收費費率'];
		$json[$i]['收費時間'] = $row['收費時間'];
		$json[$i]['電話'] = $row['電話'];
		$json[$i]['入口位置座標(X)'] = $row['入口位置座標(X)'];
		$json[$i]['入口位置座標(Y)'] = $row['入口位置座標(Y)'];
		$json[$i]['備註'] = $row['備註'];
		$i++;
    }
	echo json_encode($json);
		break;

	case 'parking_nan_pay':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['項次'] = $row['項次'];
		$json[$i]['行政區'] = $row['行政區'];
		$json[$i]['停車場名稱'] = $row['停車場名稱'];
		$json[$i]['位址'] = $row['位址'];
		$json[$i]['大型車(一般)'] = $row['大型車(一般)'];
		$json[$i]['小型車(一般)'] = $row['小型車(一般)'];
		$json[$i]['小型車(身障)'] = $row['小型車(身障)'];
		$json[$i]['小型車(婦幼)'] = $row['小型車(婦幼)'];
		$json[$i]['小型車(綠能)'] = $row['小型車(綠能)'];
		$json[$i]['小型車小計'] = $row['小型車小計'];
		$json[$i]['機車(一般)'] = $row['機車(一般)'];
		$json[$i]['機車(身障)'] = $row['機車(身障)'];
		$json[$i]['小型車(一般)'] = $row['小型車(一般)'];
		$json[$i]['機車小計'] = $row['機車小計'];
		$json[$i]['構造方式'] = $row['構造方式'];
		$json[$i]['收費費率'] = $row['收費費率'];
		$json[$i]['收費時間'] = $row['收費時間'];
		$json[$i]['電話'] = $row['電話'];
		$json[$i]['入口位置座標(X)'] = $row['入口位置座標(X)'];
		$json[$i]['入口位置座標(Y)'] = $row['入口位置座標(Y)'];
		$json[$i]['備註'] = $row['備註'];
		$i++;
    }
	echo json_encode($json);
		break;

	case 'parking_kao':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['areano'] = $row['areano'];
		$json[$i]['area'] = $row['area'];
		$json[$i]['type'] = $row['type'];
		$json[$i]['no'] = $row['no'];
		$json[$i]['name'] = $row['name'];
		$json[$i]['addr'] = $row['addr'];
		$json[$i]['payinfo'] = $row['payinfo'];
		$json[$i]['worktime'] = $row['worktime'];
		$json[$i]['ps'] = $row['ps'];
		
		$i++;
    }
	echo json_encode($json);
		break;
	
}

?>
