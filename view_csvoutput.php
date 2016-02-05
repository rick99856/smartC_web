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
    case 'view_nan':
      $csv_content = "id,景點編號,景點中文名稱,景點特色詳細文字簡述,開放時間,景點之管理權責單位代碼,
                      X坐標,Y坐標,景點分類代碼1,Changetime,地址,景點服務電話,停車資訊,
                      主要停車場X坐標,主要停車場Y坐標,
                      票價及相關價格資料,警告及注意事項,常用搜尋關鍵字,\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["id"].","
                     .$IDCheck[$index]["景點編號"].","
                     .$IDCheck[$index]["景點中文名稱"].","
                     .$IDCheck[$index]["景點特色詳細文字簡述"].","
                     .$IDCheck[$index]["開放時間"].","
                     .$IDCheck[$index]["景點之管理權責單位代碼"].","
                     .$IDCheck[$index]["X坐標"].","
                     .$IDCheck[$index]["Y坐標"].","
                     .$IDCheck[$index]["景點分類代碼1"].","
                     .$IDCheck[$index]["Changetime"].","
                     .$IDCheck[$index]["地址"].","
                     .$IDCheck[$index]["景點服務電話"].","
                     .$IDCheck[$index]["停車資訊"].","
                     .$IDCheck[$index]["主要停車場X坐標"].","
                     .$IDCheck[$index]["主要停車場Y坐標"].","
                     .$IDCheck[$index]["票價及相關價格資料"].","
                     .$IDCheck[$index]["警告及注意事項"].","
                     .$IDCheck[$index]["常用搜尋關鍵字"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'view_kao':
      $csv_content = "Id,Name,Zone,Toldescribe,Description,Tel,Addr,Travellinginfo,
                      Opentime,Picture1,Picdescribe1,Gov,Px,Py,Class1,Class2,
                      Level,Website,Parkinginfo_px,Parkinginfo_py,Ticketinfo,
                      Remarks,Changetime,Lng,Lat,Seq\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["Id"].","
                     .$IDCheck[$index]["Name"].","
                     .$IDCheck[$index]["Zone"].","
                     .$IDCheck[$index]["Toldescribe"].","
                     .$IDCheck[$index]["Description"].","
                     .$IDCheck[$index]["Tel"].","
                     .$IDCheck[$index]["Addr"].","
                     .$IDCheck[$index]["Travellinginfo"].","
                     .$IDCheck[$index]["Opentime"].","
                     .$IDCheck[$index]["Picture1"].","
                     .$IDCheck[$index]["Picdescribe1"].","
                     .$IDCheck[$index]["Gov"].","
                     .$IDCheck[$index]["Px"].","
                     .$IDCheck[$index]["Py"].","
                     .$IDCheck[$index]["Class1"].","
                     .$IDCheck[$index]["Class2"].","
                     .$IDCheck[$index]["Level"].","
                     .$IDCheck[$index]["Website"].","
                     .$IDCheck[$index]["Parkinginfo_px"].","
                     .$IDCheck[$index]["Parkinginfo_py"].","
                     .$IDCheck[$index]["Ticketinfo"].","
                     .$IDCheck[$index]["Remarks"].","
                     .$IDCheck[$index]["Changetime"].","
                     .$IDCheck[$index]["Lng"].","
                     .$IDCheck[$index]["Lat"].","
                     .$IDCheck[$index]["Seq"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'view':
      $csv_content = "ID,Name,Told,Tel,Addr,Open,Px,Py,Ticket,PS,site\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["ID"].","
                     .$IDCheck[$index]["Name"].","
                     .$IDCheck[$index]["Told"].","
                     .$IDCheck[$index]["Tel"].","
                     .$IDCheck[$index]["Addr"].","
                     .$IDCheck[$index]["Open"].","
                     .$IDCheck[$index]["Px"].","
                     .$IDCheck[$index]["Py"].","
                     .$IDCheck[$index]["Ticket"].","
                     .$IDCheck[$index]["PS"].","
                     .$IDCheck[$index]["site"]."\r\n";
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


