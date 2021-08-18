<?php
  require_once 'models/db_config.php';
    $FirstName="";
    $LastName="";
    $Password="";
    $PresentAddress="";
    $PermanentAddress="";
    $Gender="";
    $Phone="";
    $Email="";
    $NIDNumber="";
    $Payment="";
	$Shift="";
	$Availablity="";
   
    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $Password=$_POST["Password"];
    $PresentAddress=$_POST["PresentAddress"];
    $PermanentAddress=$_POST["PermanentAddress"];
    $Gender=$_POST["Gender"];
    $Phone=$_POST["Phone"];
    $Email=$_POST["Email"];
    $NIDNumber=$_POST["NIDNumber"];
    $Payment=$_POST["Payment"];
    $Shift=$_POST["Shift"];
	$Availablity=$_POST["Availablity"];
   
    $query="UPDATE `registration-form` SET `First Name`='".$FirstName."',`Last Name='".$LastName."',`Password`='".$Password."',
	`Present Address`='".$PresentAddress."',`Permanent Address`='".$PermanentAddress."',
    `Gender`='".$Gender."',`Phone`='".$Phone."',`Email`='".$Email."',`Payment`='".$Payment."',
	`Shift`='".$Shift."',`Availablity`='".$Availablity."' WHERE`NID Number`=$NIDNumber";
    $result=execute($query);
	}
   ?>