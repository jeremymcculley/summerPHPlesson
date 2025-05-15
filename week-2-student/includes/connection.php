<?php
  // save your connection information
  $dbHost     = "172.31.22.43";
  $dbUsername = "Add your username";
  $dbPassword = "Your password";
  $dbName     = "Your database name";
  // create our connection and save to a variable
  $con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
  if(!$con){
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "<h3>Connected to the database</h3>";
  }
  ?>