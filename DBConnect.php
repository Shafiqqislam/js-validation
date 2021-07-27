<?php
  function connect() {
    $conn = new mysqli("localhost", "root", "", "wkt");
    if ($conn->connect_error) {
      die("connection failed.".$conn->connect_error);
    }
    return $conn;
  }
?>