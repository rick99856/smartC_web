<?php
// @header("Content-Type:text/html; charset=utf8");
require_once("function/global_function.php");
    $PdoOptions = array(
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );
try{
	$conn = new PDO("mysql:host=localhost;dbname=smartc","s13113241","hs9m322x",$PdoOptions);
	$IDCheck = sqlQry("select * from ".$_GET['db'],array());
  $csv_content="";
  switch ($_GET['db']) {
    case 'bab':
      $csv_content = "id,Name,Addr,Tel,Lng,Lat,site\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["id"].","
                     .$IDCheck[$index]["Name"].","
                     .$IDCheck[$index]["Addr"].","
                     .$IDCheck[$index]["Tel"].","
                     .$IDCheck[$index]["Lng"].","
                     .$IDCheck[$index]["Lat"].","
                     .$IDCheck[$index]["site"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'bab_kao':
      $csv_content = "編號,類別,星等,旅宿名稱,縣市,鄉鎮,地址,電話,傳真,房間數,電子郵件,網址,民宿登記證編號
                      ,經度Lng,緯度Lat,資料序號Seq\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["編號"].","
                     .$IDCheck[$index]["類別"].","
                     .$IDCheck[$index]["星等"].","
                     .$IDCheck[$index]["旅宿名稱"].","
                     .$IDCheck[$index]["縣市"].","
                     .$IDCheck[$index]["鄉鎮"].","
                     .$IDCheck[$index]["地址"].","
                     .$IDCheck[$index]["電話"].","
                     .$IDCheck[$index]["傳真"].","
                     .$IDCheck[$index]["房間數"].","
                     .$IDCheck[$index]["電子郵件"].","
                     .$IDCheck[$index]["網址"].","
                     .$IDCheck[$index]["民宿登記證編號"].","
                     .$IDCheck[$index]["經度Lng"].","
                     .$IDCheck[$index]["緯度Lat"].","
                     .$IDCheck[$index]["資料序號Seq"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'bab_nan':
      $csv_content = "名稱,地址,經營者,電話,Longitude,Latitude\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["名稱"].","
                     .$IDCheck[$index]["地址"].","
                     .$IDCheck[$index]["經營者"].","
                     .$IDCheck[$index]["電話"].","
                     .$IDCheck[$index]["Longitude"].","
                     .$IDCheck[$index]["Latitude"]."\r\n";
      }
      print_r($csv_content);
    break;
    default:
      # code...
      break;
  }

	
    //轉成Csv下載
    // $content = mb_convert_encoding($csv_content , "Big5" , "UTF-8");
    // echo $content; //很重要
    // header("Content-type: text/x-csv");
    // header("Content-Disposition: attachment; filename=".$_GET['db'].date("yy-mm-dd")."csv");
}catch(PDOException $e){
	// echo "error";
	print_r($e);
}

?> 


