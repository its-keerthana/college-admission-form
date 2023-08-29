<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$school12 = $_POST["school12"];
$mark12 = $_POST["mark12"];
$school10 = $_POST["school10"];
$mark10 = $_POST["mark10"];
$religion = $_POST["religion"];
$dept = $_POST["dept"];
$fathername= $_POST["fathername"];
$phone= $_POST["phone"];
$addr = $_POST["addr"];
$conn = mysqli_connect("localhost", "root", "", "learning") or die("connection failed");
$sql = "INSERT INTO `student` (`firstname`, `lastname`, `dob`, `gender`, `school12`, `mark12`, `school10`, 
`mark10`, `religion`, `dept`, `fathername`, `phone`, `addr`) 
VALUES ('{$firstname}','{$lastname}','{$dob}','{$gender}' ,'{$school12}','{$mark12}','{$school10}',
'{$mark10}','{$religion}','{$dept}','{$fathername}','{$phone}','{$addr}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location:http://localhost/Admission-form/index.php");
mysqli_close($conn);
?>

