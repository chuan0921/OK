<?php
  # 連線資料庫
  $server = "localhost"; //資料庫位置
  $user = "root"; //資料庫管理者帳號
  $password=""; //資料庫管理者密碼 
  $name = "ok"; //資料庫名稱 
  $link =mysqli_connect($server,$user,$password,$name); //對資料庫連線
  //如果資料庫連線不成功顯示"Can not connect to the database"
  if(!$link) 
    die("Can not connect to the database1");

  # 舊版 連線資料庫
  $severname = "localhost";
  $username  = "root";
  $dbname = "ok";
  if(!@mysql_connect($severname, $username, $password))
    die("Can not connect to the database");
  mysql_query("SET NAMES 'utf8'");
  
  if(!@mysql_select_db($dbname))
    die("Can not use the database");
 ?>