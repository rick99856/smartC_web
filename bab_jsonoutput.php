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
	case 'bab':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['id'] = $row['id'];
		$json[$i]['Name'] = $row['Name'];
		$json[$i]['Addr'] = $row['Addr'];
		$json[$i]['Tel'] = $row['Tel'];
		$json[$i]['Lng'] = $row['Lng'];
		$json[$i]['Lat'] = $row['Lat'];
		$json[$i]['site'] = $row['site'];
		$i++;
    }
	echo json_encode($json);
		break;

	case 'bab_nan':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['name'] = $row['名稱'];
		$json[$i]['addr'] = $row['地址'];
		$json[$i]['owner'] = $row['經營者'];
		$json[$i]['tel'] = $row['電話'];
		$json[$i]['lng'] = $row['Longitude'];
		$json[$i]['lat'] = $row['Latitude'];
		$i++;
    }
	echo json_encode($json);
		break;

	case 'bab_kao':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['編號'] = $row['編號'];
		$json[$i]['類別'] = $row['類別'];
		$json[$i]['星等'] = $row['星等'];
		$json[$i]['旅宿名稱'] = $row['旅宿名稱'];
		$json[$i]['縣市'] = $row['縣市'];
		$json[$i]['鄉鎮'] = $row['鄉鎮'];
		$json[$i]['地址'] = $row['地址'];
		$json[$i]['電話'] = $row['電話'];
		$json[$i]['傳真'] = $row['傳真'];
		$json[$i]['房間數'] = $row['房間數'];
		$json[$i]['電子郵件'] = $row['電子郵件'];
		$json[$i]['網址'] = $row['網址'];
		$json[$i]['民宿登記證編號'] = $row['民宿登記證編號'];
		$json[$i]['經度Lng'] = $row['經度Lng'];
		$json[$i]['緯度Lat'] = $row['緯度Lat'];
		$json[$i]['tel'] = $row['資料序號Seq'];
		$i++;
    }
	echo json_encode($json);
		break;
	
}

?>
