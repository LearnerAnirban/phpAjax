<?php

$sName = $_POST['stuName'];
$sRoll = $_POST['stuRoll'];
$sClass = $_POST['stuClass'];

$conn = mysqli_connect("localhost", "root", "", "ajax") or die("connection failed");
$sql = "INSERT INTO students (name, roll, class) VALUES ('{$sName}', '{$sRoll}', '{$sClass}')";

if(mysqli_query($conn, $sql)) {
  echo 1;
} else {
  echo 2;
}
