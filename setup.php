<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Setup</title>
</head>
<body>


    <h1>Setup for Database</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}


$sql = "CREATE DATABASE IF NOT EXISTS studentrecord";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


$conn->select_db("Ballesteros");


$sql = "CREATE TABLE IF NOT EXISTS student (
    StudentID MEDIUMINT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50),
    DateOfBirth date,
    Email VARCHAR(50),
    Phone INT(11),
    PRIMARY KEY(StudentID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS course (
    CourseID MEDIUMINT NOT NULL AUTO_INCREMENT,
    CourseName VARCHAR(200),
    Credits INT(255),
    PRIMARY KEY(CourseID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table course created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS instructor (
    InstructorID MEDIUMINT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(50),
    Phone INT(11),
    PRIMARY KEY(InstructorID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table instructor created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS enrollment (
    EnrollmentID INT PRIMARY KEY,
    StudentID INT, 
    CourseID INT, 
    EnrollmentDate DATE,
    Grade INT,
    FOREIGN KEY (StudentID) REFERENCES student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES course(CourseID)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table enrollment created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$conn->close();

?>

    
</body>
</html>


