<?php
     $ uname = $_POST['uname'];
     $ psw = $_POST['psw'];

     $ uname = stripcslashes($uname);
     $ psw = stripcslashes($psw);
     $ uname = mysql_real_escape_string($uname);
     $ psw = mysql_real_escape_string($psw); 

     //Database Connection
     mysql_connect("localhost","root","");
     mysql_select_db("login");

     $result = mysql_query("select * from users where uname= '$uname' and psw= '$psw' ") or die("failed to query database" mysql_error());
     $row = mysql_fetch_array($result);
     if($row['uname'] == $uname && $row['psw'] == $psw){
     	echo= "loginsuccesful... "$row['uname'];

     }else{
     	
     	echo " failed login...";
     	
     }
?>