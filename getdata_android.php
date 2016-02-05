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
$value = $_POST['data_table'];
// $value = 'bab_nan';
// echo $value;
switch ($value) {
	case 'bab':
		# code...
	mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM bab";
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
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
	case 'view':
		# code...
			mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM view";
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
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

	case 'parking':
		# code...
				mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM parking";
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array();
    while($row = mysql_fetch_array($result)){
        $json[$i]['name'] = $row['name'];
		$json[$i]['addr'] = $row['addr'];
		$json[$i]['payinfo'] = $row['payinfo'];
		$json[$i]['worktime'] = $row['worktime'];
		$json[$i]['px'] = $row['px'];
		$json[$i]['py'] = $row['py'];

		$i++;
    }
	echo json_encode($json);
		break;

	case 'police':
		# code...
				mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM police";
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array(); 
    while($row = mysql_fetch_array($result)){
        $json[$i]['name'] = $row['name'];
		$json[$i]['siteno'] = $row['siteno'];
		$json[$i]['addr'] = $row['addr'];
		$json[$i]['tel'] = $row['tel'];
		$json[$i]['lat'] = $row['lat'];
		$json[$i]['lng'] = $row['lng'];
		$json[$i]['site'] = $row['site'];

		$i++;
    }
	echo json_encode($json);
		break;


	case 'hospital':
		# code...
		mysql_select_db($mysql_db_database);
   	$sql = "SELECT * FROM hospital";
    $result = mysql_query($sql) or die('MySQL query error');
    $i = 0;

     $json = array(); 
    while($row = mysql_fetch_array($result)){
        $json[$i]['name'] = $row['name'];
		$json[$i]['addr'] = $row['addr'];
		$json[$i]['tel'] = $row['tel'];
		$json[$i]['lat'] = $row['lat'];
		$json[$i]['lng'] = $row['lng'];
		$json[$i]['site'] = $row['site'];

		$i++;
    }
	echo json_encode($json);
		break;
}

?>
