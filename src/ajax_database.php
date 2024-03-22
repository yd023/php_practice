<?php

// $servername = "db";
// $username = "root";
// $password = "pass";
// $dbname = "ajax_demo";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE $dbname";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to create table
// $sql = "CREATE TABLE user (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// FirstName VARCHAR(30) NOT NULL,
// LastName VARCHAR(30) NOT NULL,
// Age INT(3) UNSIGNED NOT NULL,
// Hometown VARCHAR(30) NOT NULL,
// Job VARCHAR(30) NOT NULL
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $sql = "INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Peter', 'Griffin', 41, 'Quahog', 'Brewery');";
// $sql .= "INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Lois', 'Griffin', 40, 'Newport', 'Piano Teacher');";
// $sql .= "INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Joseph', 'Swanson', 39, 'Quahog', 'Police Officer');";
// $sql .= "INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Glenn', 'Quagmire', 41, 'Quahog', 'Pilot');";

// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

?>

<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","family.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Peter Griffin</option>
    <option value="2">Lois Griffin</option>
    <option value="3">Joseph Swanson</option>
    <option value="4">Glenn Quagmire</option>
    </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>