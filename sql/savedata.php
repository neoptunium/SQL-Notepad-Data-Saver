<!DOCTYPE html>
<html>
<head>
<title>SQL Notepad Data Saver</title>
<style>
body {
background-color: #FFFF99;
}
.top-div {
    border: 3px solid black;
    text-align: center;
    font-size: 30px;
    font-family: "Times New Roman";
    box-sizing: border-box;
    width: 30%;
    margin: auto;
    background-color: #fdfd7a;
    border-radius: 25px;
    padding: 13px;
    width: 500px;
    height: 75px;
}
.main-div {
    text-align: center;
    font-size: 28px;
    font-family: "Times New Roman";
}
</style>
</head>
<body>
<br>
<div class="top-div">
        <a>SQL Notepad Data Saver</a>
    </div>
    <br>
    <br>
    <div class="main-div">
        <a><i>Successfully Saved The Data</i></a>
    </div>
<?php
$username = filter_input(INPUT_POST, 'username');
if (!empty($username)){
$host = "ServerName";
$dbusername = "Username";
$dbpassword = "Password";
$dbname = "DataBaseName";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username)
values ('$username')";
if ($conn->query($sql)){
}
else{
}
$conn->close();
}
}
else{
die();
}
?>
</body>
</html>