<?php
 define('DB_NAME', 'demo1');
 $connection = new \PDO(
'mysql:host=localhost:3306',
'root',
 'root1234'
);
 $sql = 'CREATE DATABASE IF NOT EXISTS ' . DB_NAME ;
 $stmt0 = $connection->prepare($sql);
 $stmt0->execute();
 $connection = new \PDO(
 'mysql:dbname=' . DB_NAME . ';host=localhost:3306',
 'root',
 'root1234'
);
$sql = 'CREATE TABLE IF NOT EXISTS book ('
 . 'id integer PRIMARY KEY AUTO_INCREMENT,'
 . 'title text,'
 . 'author text,'
 . 'price float'
 . ')';
 $stmt1 = $connection->prepare($sql);
 $stmt1->execute();

 $sql = "INSERT INTO book (title, author, price) VALUES ('C++', 'mani', 9.99)";
 $stmt2 = $connection->prepare($sql);
 $stmt2->execute();
 $sql = "INSERT INTO book (title, author, price) VALUES ('java','ravi', 59.99)";
 $stmt3 = $connection->prepare($sql);
 $stmt3->execute();