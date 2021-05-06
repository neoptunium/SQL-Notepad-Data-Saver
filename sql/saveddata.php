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
.center {
    text-align: center;
    margin-left: auto;
  margin-right: auto;
}
th {
    text-align: center;
    font-size: 28px;
    font-family: "Times New Roman";
    font-weight: normal;
}
table {
width: 55%;
color: black;
font-family: "Times New Roman";
font-size: 25px;
border: 3px solid black;
box-sizing: border-box;
border-radius: 25px;
padding: 13px;
}
tr:nth-child(even) {background-color: #fdfd7a}
</style>
</head>
<body>
<br>
<div class="top-div">
        <a>SQL Notepad Data Saver</a>
    </div>
    <br>
    <br>
    <table class="center">
<tr>
<th><i>Saved Data</i></th>
</tr>
<?php
$conn = mysqli_connect("ServerName", "Username", "Password", "DataBaseName");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username FROM account";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"] . "</td><td>";
}
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>