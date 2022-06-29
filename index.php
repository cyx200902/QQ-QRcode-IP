<?php
$time=time();
$reason=$_GET["r"];
$ip = $_SERVER["REMOTE_ADDR"];
  class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('ip.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }

   $sql ="
      INSERT INTO iplist (time,ip,reason)
      VALUES ('$time', '$ip','$reason');
";

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      //echo "Records created successfully\n";
   }
   $db->close();
    //echo($userid);
?>

<h1>二维码过期</h1>
