<?php
    
    $db = "register_info";
    $table = "comments";
    $conn = new mysqli("localhost:3306","php_user","password",$db);

    if ($mysqli -> connect_errno) {
        $meassage = "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }else{
        $meassage = "Connected ";
      }



 