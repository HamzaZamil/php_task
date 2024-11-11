<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   
   try {
     $conn = new PDO("mysql:host=$servername;dbname=login_db", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //   if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['signup']) )
   //   {
   //     echo"Connected successfully";
   //     header('Location:home.html');
   //   }
        //  echo "Connected successfully";
        //  echo "hamza";
   } catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
   }


?>