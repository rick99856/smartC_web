<?php
@header("Content-Type:text/html; charset=utf8");
require_once("function/global_function.php");
$url = "http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=5&FileType=2&Lang=C&FolderType=O";
    
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
	$Opendata = array($value['編號'],$value['類別'],$value['星等'],$value['旅宿名稱'],$value['縣市'],$value['鄉鎮'],$value['地址'],
					$value['電話'],$value['傳真'],$value['房間數'],$value['電子郵件'],$value['網址'],$value['民宿登記證編號'],$value['經度Lng'],
					$value['緯度Lat'],$value['資料序號Seq']);

	// echo json_encode($Opendata);
	

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
	$IDCheck = "INSERT INTO bab_kao (`編號`,`類別`,`星等`,`旅宿名稱`,`縣市`,`鄉鎮`,`地址`,`電話`,
				`傳真`,`房間數`,`電子郵件`,`網址`,`民宿登記證編號`,`經度Lng`,`緯度Lat`,`資料序號Seq`) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$a = $conn->prepare($IDCheck);
	// print_r($a);

	if($a->execute($Opendata)){
		echo "1";
	}
	else{
		// echo $conn->errorInfo();
	}

}catch(PDOException $e){
	// echo "error";
	print_r($e);
}
}
?> 