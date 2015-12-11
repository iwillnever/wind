<?php
$dsn="mysql:host=localhost;dbname=first";
$passwd='iwillnever';
$username='root';
$dbh=new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE
,PDO::ERRMODE_EXCEPTION);//设置错误模式,发生错误时抛出异常
$dbh->exec('set names utf8');
?>
