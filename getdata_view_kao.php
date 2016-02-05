<?php
@header("Content-Type:text/html; charset=utf8");
require_once("function/global_function.php");
$url = "http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=1&FileType=1&Lang=C&FolderType=";
    
    $PdoOptions = array(
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );
	    
$data = file_get_contents($url); // 取得json字串
$data = json_decode($data, true); // 將json字串轉成陣列
foreach($data as $value) {


        

//      // echo $value['Name'] . " ";                                
//      // echo $value['Toldescribe'] . '<br>';
	$Opendata = array($value['Id'],$value['Name'],$value['Zone'],$value['Toldescribe'],$value['Description'],$value['Tel'],$value['Add'],
					$value['Travellinginfo'],$value['Opentime'],$value['Picture1'],$value['Picdescribe1'],$value['Gov'],$value['Px'],$value['Py'],
					$value['Class1'],$value['Class2'],$value['Level'],$value['Website'],$value['Parkinginfo_px'],$value['Parkinginfo_py'],
					$value['Ticketinfo'],$value['Remarks'],$value['Changetime'],$value['經度Lng'],$value['緯度Lat'],$value['資料序號Seq']);

	
	

	// $IDCheck = sqlEdit("INSERT INTO kaohsiung (`Id`,`Name`,`Zone`,`Toldescribe`,`Description`,`Tel`,`Add`,`Travellinginfo`,
	// 			`Opentime`,`Picture1`,`Picdescribe1`,`Gov`,`Px`,`Py`,`Class1`,`Class2`,`Level`,`Website`,
	// 			`Parkinginfo_px`,`Parkinginfo_py`,`Ticketinfo`,`Remarks`,`Changetime`,`Lng`,`Lat`,`Seq`) 
	// 			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
	// 			$Opendata);
	// print_r($IDCheck);
	// if($IDCheck){
	// 	echo 1;
	// }
	// else{
	// 	echo 0;
	// }

	    
// }
try{
	$conn = new PDO("mysql:host=localhost;dbname=smartc","s13113241","hs9m322x",$PdoOptions);
// $Opendata = array($value['Id'],$value['Name'],$value['Zone'],$value['Toldescribe'],$value['Description'],$value['Tel'],$value['Add'],
// 					$value['Travellinginfo'],$value['Opentime'],$value['Picture1'],$value['Picdescribe1'],$value['Gov'],$value['Px'],$value['Py'],
// 					$value['Class1'],$value['Class2'],$value['Level'],$value['Website'],$value['Parkinginfo_px'],$value['Parkinginfo_py'],
// 					$value['Ticketinfo'],$value['Remarks'],$value['Changetime'],$value['經度Lng'],$value['緯度Lat'],$value['資料序號Seq']);

	// $Opendata =array("2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2");
	$IDCheck = "INSERT INTO view_kao (`Id`,`Name`,`Zone`,`Toldescribe`,`Description`,`Tel`,`Addr`,`Travellinginfo`,
				`Opentime`,`Picture1`,`Picdescribe1`,`Gov`,`Px`,`Py`,`Class1`,`Class2`,`Level`,`Website`,
				`Parkinginfo_px`,`Parkinginfo_py`,`Ticketinfo`,`Remarks`,`Changetime`,`Lng`,`Lat`,`Seq`) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$a = $conn->prepare($IDCheck);
	// print_r($a);
	if($a->execute($Opendata)){
		echo "1";
	}
	else{
		// echo $conn->errorInfo();
	}

}catch(PDOException $e){
	echo "error";
	print_r($e);
}
}
?> 