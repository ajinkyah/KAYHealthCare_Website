<!DOCTYPE html>
<html>
<head>
<style>
    * {
        box-sizing: border-box;
    }
    body {
background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);    }
    h1 {
        text-align: center;
        color: white;
        font-size: 50px;
        font-weight: 700;
    }
table {
    width: 100%;
    border-collapse: collapse;
}
    table tr th {
        font-size: 20px;
    }
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
    span a {
        font-size: 25px;
        color: white;
        margin-right: 10px;
        text-decoration: none;
        margin-top: 15px;
       background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
        border-radius: 5px;
        
        padding: 5px 10px;
    }
    span.logout {
        text-align: right;
    }
    span {
        width: 100%;
        display: inline-block;
    }

th {text-align: left;}
</style>
</head>
<body>

<span class="logout"><a href="http://localhost/IPL6/logout.php">LOG OUT</a></span>
<?php
$user = $_POST["ip"];
$pass = $_POST["ip1"];
$db='sample';
$con=mysqli_connect('localhost',$user,$pass,$db) or die ("Unable to connect");
//mysqli_query($db,"USE sample") or die('could not select database - sample');

echo "
<h1>Appointments</h1>
<table>
<tr style='background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);'>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Date</th>
<th>Gender</th>
<th>Message</th>
</tr>";

$query = "SELECT Name,Email,Mobile,Date,Gender,Message FROM ".$user;
$result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr bgcolor='white'>";
    echo "<td>" . $row['Name'] . "</td> &nbsp";
    echo "<td>" . $row['Email'] . "</td> &nbsp";
    echo "<td>" . $row['Mobile'] . "</td> &nbsp";
    echo "<td>" . $row['Date'] . "</td> &nbsp";
    echo "<td>" . $row['Gender'] . "</td> &nbsp";
    echo "<td>" . $row['Message'] . "</td> &nbsp";
    echo "</tr>";
    }
mysqli_close($con);


echo "</table>";


?>
</body>
</html> 
    