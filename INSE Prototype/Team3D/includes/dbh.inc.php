<?php

 $servername = "localhost";
 $dbUsername  = "root";
 $dbPassword = "";
 $dbName = "team3d";

 $conn = mysqli_connect($servername, $dbUsername,$dbPassword,$dbName);

 if (!$conn){

   die("connection failed:".myslqi_connect_error());
 }
