
<?php
$DB_DSN = 'mysql:dbname=camagru;host=localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';

try {
   /**
    * IF DATABASE EXIST DROP ELSE CREATE
    */
   $conn = new PDO("mysql:host=localhost", $DB_USER, $DB_PASSWORD);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = "Drop DATABASE IF EXISTS camagru;";
   $sql = "CREATE DATABASE IF NOT EXISTS camagru;";
   // use exec() because no results are returned
   $conn->exec($stmt);
   echo "Database dropped successfully<br>";
   $conn->exec($sql);
   echo "Database created successfully<br>";
   /**
    * IF DATABASE IS CREATED, CREATE TABLES
    */
   $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query = "CREATE TABLE users (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(30) NOT NULL,
       email VARCHAR(30),
       password VARCHAR(50) NOT NULL
       );";
   $db->exec($query);
   echo "users table created successfully<br>";
   }
   catch(PDOException $e)
   {
       echo $sql . "<br>" . $e->getMessage();
   }