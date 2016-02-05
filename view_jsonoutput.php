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
	case 'view_nan':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;
     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['id'] = $row['id'];
		$json[$i]['景點編號'] = $row['景點編號'];
		$json[$i]['景點中文名稱'] = $row['景點中文名稱'];
		$json[$i]['景點特色詳細文字簡述'] = $row['景點特色詳細文字簡述'];
		$json[$i]['開放時間'] = $row['開放時間'];
		$json[$i]['景點之管理權責單位代碼'] = $row['景點之管理權責單位代碼'];
		$json[$i]['X坐標'] = $row['X坐標'];
		$json[$i]['Y坐標'] = $row['Y坐標'];
		$json[$i]['景點分類代碼1'] = $row['景點分類代碼1'];
		$json[$i]['Changetime'] = $row['Changetime'];
		$json[$i]['地址'] = $row['地址'];
		$json[$i]['景點服務電話'] = $row['景點服務電話'];
		$json[$i]['停車資訊'] = $row['停車資訊'];
		$json[$i]['主要停車場X坐標'] = $row['主要停車場X坐標'];
		$json[$i]['主要停車場Y坐標'] = $row['主要停車場Y坐標'];
		$json[$i]['票價及相關價格資料'] = $row['票價及相關價格資料'];
		$json[$i]['警告及注意事項'] = $row['警告及注意事項'];
		$json[$i]['常用搜尋關鍵字'] = $row['常用搜尋關鍵字'];

		$i++;
    }
	echo json_encode($json);
		break;

	case 'view_kao':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
       	$json[$i]['Id'] = $row['Id'];
		$json[$i]['Name'] = $row['Name'];
		$json[$i]['Zone'] = $row['Zone'];
		$json[$i]['Toldescribe'] = $row['Toldescribe'];
		$json[$i]['Description'] = $row['Description'];
		$json[$i]['Tel'] = $row['Tel'];
		$json[$i]['Addr'] = $row['Addr'];
		$json[$i]['Travellinginfo'] = $row['Travellinginfo'];
		$json[$i]['Opentime'] = $row['Opentime'];
		$json[$i]['Picture1'] = $row['Picture1'];
		$json[$i]['Picdescribe1'] = $row['Picdescribe1'];
		$json[$i]['Gov'] = $row['Gov'];
		$json[$i]['Px'] = $row['Px'];
		$json[$i]['Py'] = $row['Py'];
		$json[$i]['Class1'] = $row['Class1'];
		$json[$i]['Class2'] = $row['Class2'];
		$json[$i]['Level'] = $row['Level'];
		$json[$i]['Website'] = $row['Website'];
		$json[$i]['Parkinginfo_px'] = $row['Parkinginfo_px'];
		$json[$i]['Parkinginfo_py'] = $row['Parkinginfo_py'];
		$json[$i]['Ticketinfo'] = $row['Ticketinfo'];
		$json[$i]['Remarks'] = $row['Remarks'];
		$json[$i]['Changetime'] = $row['Changetime'];
		$json[$i]['Lng'] = $row['Lng'];
		$json[$i]['Lat'] = $row['Lat'];
		$json[$i]['Seq'] = $row['Seq'];
		$i++;
    }
	echo json_encode($json);
		break;

	case 'view':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM ".$value;
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['ID'] = $row['ID'];
		$json[$i]['Name'] = $row['Name'];
		$json[$i]['Told'] = $row['Told'];
		$json[$i]['Tel'] = $row['Tel'];
		$json[$i]['Addr'] = $row['Addr'];
		$json[$i]['Open'] = $row['Open'];
		$json[$i]['Px'] = $row['Px'];
		$json[$i]['Py'] = $row['Py'];
		$json[$i]['Ticket'] = $row['Ticket'];
		$json[$i]['PS'] = $row['PS'];
		$json[$i]['site'] = $row['site'];
		
		$i++;
    }
	echo json_encode($json);
		break;
	
}

?>
