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

  switch ($_GET['db']) {
    case 'parking_nan_free':
      $csv_content = "項次,行政區,停車場名稱,位址,大型車(一般),小型車(一般),小型車(身障),
      小型車(婦幼),小型車(綠能),小型車小計,機車(一般),機車(身障),機車小計,構造方式,
      收費費率,收費時間,電話,入口位置座標(X),入口位置座標(Y),備註\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["項次"].","
                     .$IDCheck[$index]["行政區"].","
                     .$IDCheck[$index]["停車場名稱"].","
                     .$IDCheck[$index]["位址"].","
                     .$IDCheck[$index]["大型車(一般)"].","
                     .$IDCheck[$index]["小型車(一般)"].","
                     .$IDCheck[$index]["小型車(身障)"].","
                     .$IDCheck[$index]["小型車(婦幼)"].","
                     .$IDCheck[$index]["小型車(綠能)"].","
                     .$IDCheck[$index]["小型車小計"].","
                     .$IDCheck[$index]["大型車(一般)"].","
                     .$IDCheck[$index]["小型車(一般)"].","
                     .$IDCheck[$index]["機車(一般)"].","
                     .$IDCheck[$index]["機車(身障)"].","
                     .$IDCheck[$index]["機車小計"].","
                     .$IDCheck[$index]["構造方式"].","
                     .$IDCheck[$index]["收費費率"].","
                     .$IDCheck[$index]["收費時間"].","
                     .$IDCheck[$index]["電話"].","
                     .$IDCheck[$index]["入口位置座標(X)"].","
                     .$IDCheck[$index]["入口位置座標(Y)"].","
                     .$IDCheck[$index]["備註"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'parking_nan_pay':
      $csv_content = "項次,行政區,停車場名稱,位址,大型車(一般),小型車(一般),小型車(身障),
      小型車(婦幼),小型車(綠能),小型車小計,機車(一般),機車(身障),機車小計,構造方式,
      收費費率,收費時間,電話,入口位置座標(X),入口位置座標(Y),備註\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["項次"].","
                     .$IDCheck[$index]["行政區"].","
                     .$IDCheck[$index]["停車場名稱"].","
                     .$IDCheck[$index]["位址"].","
                     .$IDCheck[$index]["大型車(一般)"].","
                     .$IDCheck[$index]["小型車(一般)"].","
                     .$IDCheck[$index]["小型車(身障)"].","
                     .$IDCheck[$index]["小型車(婦幼)"].","
                     .$IDCheck[$index]["小型車(綠能)"].","
                     .$IDCheck[$index]["小型車小計"].","
                     .$IDCheck[$index]["大型車(一般)"].","
                     .$IDCheck[$index]["小型車(一般)"].","
                     .$IDCheck[$index]["機車(一般)"].","
                     .$IDCheck[$index]["機車(身障)"].","
                     .$IDCheck[$index]["機車小計"].","
                     .$IDCheck[$index]["構造方式"].","
                     .$IDCheck[$index]["收費費率"].","
                     .$IDCheck[$index]["收費時間"].","
                     .$IDCheck[$index]["電話"].","
                     .$IDCheck[$index]["入口位置座標(X)"].","
                     .$IDCheck[$index]["入口位置座標(Y)"].","
                     .$IDCheck[$index]["備註"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'parking_kao':
      $csv_content = "areano,area,type,no,name,addr,payinfo,worktime,ps\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["areano"].","
                     .$IDCheck[$index]["area"].","
                     .$IDCheck[$index]["type"].","
                     .$IDCheck[$index]["no"].","
                     .$IDCheck[$index]["name"].","
                     .$IDCheck[$index]["addr"].","
                     .$IDCheck[$index]["payinfo"].","
                     .$IDCheck[$index]["worktime"].","
                     .$IDCheck[$index]["ps"]."\r\n";
      }
      print_r($csv_content);
    break;
    case 'parking':
      $csv_content = "areano,area,type,no,name,addr,payinfo,worktime,ps\r\n";
      for($index  = 0 ; $index < count($IDCheck) ; $index++){
      $csv_content .= $IDCheck[$index]["areano"].","
                     .$IDCheck[$index]["area"].","
                     .$IDCheck[$index]["type"].","
                     .$IDCheck[$index]["no"].","
                     .$IDCheck[$index]["name"].","
                     .$IDCheck[$index]["addr"].","
                     .$IDCheck[$index]["payinfo"].","
                     .$IDCheck[$index]["worktime"].","
                     .$IDCheck[$index]["ps"]."\r\n";
      }
      print_r($csv_content);
    break;
  }

	
    //轉成Csv下載
    // $content = mb_convert_encoding($csv_content , "Big5" , "UTF-8");
    // echo $content; //很重要
    // header("Content-type: text/x-csv");
    // header("Content-Disposition: attachment; filename=bab.csv");
}catch(PDOException $e){
	// echo "error";
	print_r($e);
}

?> 
