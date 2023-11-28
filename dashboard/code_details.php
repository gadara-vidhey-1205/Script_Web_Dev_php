<?php

$name=$_POST['Name'];
$about=$_POST['About_you'];
$skill1=$_POST['Skill1'];
$skill2=$_POST['Skill2'];
$skill3=$_POST['Skill3'];
$task1=$_POST['Task1'];
$task2=$_POST['Task2'];
$task3=$_POST['Task3'];
$task4=$_POST['Task4'];
$task5=$_POST['Task5'];
$array=$_POST['Array'];
$minor_project=$_POST['Minor_project'];
$Dashboard=$_POST['Dashboard'];
$other=$_POST['Other'];

$connect=mysqli_connect("localhost","root","","15618223012");

print_r($connect);

$query="INSERT INTO `personal_details`(`Name`, `About_me`, `Skill_1`, `Skill_2`, `Skill_3`, `Task1`, `Task2`, `Task3`, `Task4`, `Task5`, `Array`, `Minor_Project`, `Dashboard_module`, `other`) VALUES ('$name','$about','$skill1','$skill2','$skill3','$task1','$task2','$task3','$task4','$task5','$array','$minor_project','$Dashboard','$other')";

$query_execute=mysqli_query($connect,$query);

?>