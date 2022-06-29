<?php
$userid=$_GET["id"];
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
      echo "Opened database successfully\n";
   }

   $sql ="
      SELECT * from iplist;
";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo("<br>");
      echo("<br>");
      echo "time = ". $row['time'] . "\n";
      echo "ip = ". $row['ip'] ."\n\n";
      echo "reason = ". $row['reason'] ."\n\n";
      echo("<br>");
      echo("<br>");
      
   }
   echo "Operation done successfully\n";
   $db->close();
?>
