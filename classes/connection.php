<?php
class connect {
  // Create connection
  public $conn;
  function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "inventory_management";
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    return $conn;
  }
}
?>
