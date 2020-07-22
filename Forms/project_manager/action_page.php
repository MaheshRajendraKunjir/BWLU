<?php

$firstname = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$github = $_REQUEST['github'];
$linkdin = $_REQUEST['linkdin'];
$File = $_REQUEST['fileToUpload'];
$file = $_FILES["fileToUpload"]["name"];
$project_pt = $_REQUEST['pt'];
$project_pd = $_REQUEST['pd'];
$project_tu = $_REQUEST['tu'];
$project_demo = $_REQUEST['demo'];
$project_enc = $_REQUEST['enc'];




// display the results
echo 'Your name is ' . $firstname  ;
echo "<br>";
echo 'Your email is ' . $email ;echo "<br>";
echo $phone  ;echo "<br>";
echo $github ;echo "<br>";
echo $linkdin ;echo "<br>";
echo $file ;echo "<br>";
echo $project_pt ;echo "<br>";
echo $project_pd ;echo "<br>";
echo $project_tu ;echo "<br>";
echo $project_demo ;echo "<br>";
echo $project_enc ;echo "<br>";

// check if the post method is used to submit the form


?>