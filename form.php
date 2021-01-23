<?php>
session_start();
?>

<html>
    <head>
        <style>
            body {
                background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            h1 {
                color: white;
                text-align: center;
                position: relative;
                margin-top : 25px;
            }
        </style>
    </head>
<body>

<?php
$user='root';
$pass='';
$db='sample';
$db=new mysqli('localhost',$user,$pass,$db) or die ("Unable to connect");
//mysqli_query($db,"USE sample") or die('could not select database - sample');
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$date = $_POST["date"];
$gender =$_POST["gender"];
$doctor = $_POST["doctor"];
$message = $_POST["message"];

$query = "INSERT INTO appointment (Name,Email,Mobile,Date,Gender,Doctor,Message) VALUES('$name','$email','$mobile','$date','$gender','$doctor','$message')";
mysqli_query($db,$query) or die(mysqli_error($db));
echo "<h1>Data Successfully inserted</h1>";



if($doctor=="Emma Watson")
{
	$user1='root';
	$pass1='';
	$db1='sample';
	$db1=new mysqli('localhost',$user1,$pass1,$db1) or die ("Unable to connect");
	$query = "INSERT INTO emma_watson (Name,Email,Mobile,Date,Gender,Message) VALUES('$name','$email','$mobile','$date','$gender','$message')";
	mysqli_query($db1,$query) or die(mysqli_error());
	mysqli_close($db1);
}

if($doctor=="Edward Jenner")
{
	$user1='root';
	$pass1='';
	$db1='sample';
	$db1=new mysqli('localhost',$user1,$pass1,$db1) or die ("Unable to connect");
	$query = "INSERT INTO edward_jenner (Name,Email,Mobile,Date,Gender,Message) VALUES('$name','$email','$mobile','$date','$gender','$message')";
	mysqli_query($db1,$query) or die(mysqli_error());
	mysqli_close($db1);
}

if($doctor=="Christopher Nolan")
{
	$user1='root';
	$pass1='';
	$db1='sample';
	$db1=new mysqli('localhost',$user1,$pass1,$db1) or die ("Unable to connect");
	$query = "INSERT INTO christopher_nolan (Name,Email,Mobile,Date,Gender,Message) VALUES('$name','$email','$mobile','$date','$gender','$message')";
	mysqli_query($db1,$query) or die(mysqli_error());
	mysqli_close($db1);
}

if($doctor=="Elon Musk")
{
	$user1='root';
	$pass1='';
	$db1='sample';
	$db1=new mysqli('localhost',$user1,$pass1,$db1) or die ("Unable to connect");
	$query = "INSERT INTO elon_musk (Name,Email,Mobile,Date,Gender,Message) VALUES('$name','$email','$mobile','$date','$gender','$message')";
	mysqli_query($db1,$query) or die(mysqli_error());
	mysqli_close($db1);
}

if($doctor=="Ashish Mulani")
{
	$user1='root';
	$pass1='';
	$db1='sample';
	$db1=new mysqli('localhost',$user1,$pass1,$db1) or die ("Unable to connect");
	$query = "INSERT INTO ashish_mulani (Name,Email,Mobile,Date,Gender,Message) VALUES('$name','$email','$mobile','$date','$gender','$message')";
	mysqli_query($db1,$query) or die(mysqli_error());
	mysqli_close($db1);
}


mysqli_close($db);


?>
    <?php
    header( "refresh:1;url=index.html" );
?>
    </body>
    </html>

