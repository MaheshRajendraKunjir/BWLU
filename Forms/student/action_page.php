<?php

$firstname = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$github = $_REQUEST['github'];
$linkdin = $_REQUEST['linkdin'];
$File = $_REQUEST['fileToUpload'];
$file = $_FILES["fileToUpload"]["name"];
$project1 = $_REQUEST['project1'];
$project2 = $_REQUEST['project2'];
$project3 = $_REQUEST['project3'];



// display the results
echo 'Your name is ' . $firstname  ;
echo "<br>";
echo 'Your email is ' . $email ;echo "<br>";
echo $phone  ;echo "<br>";
echo $github ;echo "<br>";
echo $linkdin ;echo "<br>";
echo $file ;echo "<br>";
echo $project1 ;echo "<br>";
echo $project2 ;echo "<br>";
echo $project3 ;echo "<br>";
// check if the post method is used to submit the form


?>