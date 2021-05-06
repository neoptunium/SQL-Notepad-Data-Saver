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
        <a><i>Successfully Reset All Data</i></a>
    </div>
<?php
$servername = "ServerName";
$username = "Username";
$password = "Password";
$dbname = "DataBaseName";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE TableName SET ColumnName = NULL";
if ($conn->query($sql) === TRUE) {
  echo " ";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>