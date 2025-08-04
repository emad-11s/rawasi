<?php

$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "rawasi_db";   


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("فشل الاتصال: " . $conn->connect_error);
}


$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$project_number = $_POST['project_number'];
$notes = $_POST['notes'];


$sql = "INSERT INTO contact_messages (full_name, phone_number, project_number, notes)
        VALUES ('$full_name', '$phone_number', '$project_number', '$notes')";

if ($conn->query($sql) === TRUE) {
  echo "تم الإرسال بنجاح!";
} else {
  echo "خطأ: " . $conn->error;
}

$conn->close();
?>
