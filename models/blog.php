<?php

require 'core/db.php';
// get data from db
$query = $conn-> prepare('SELECT * FROM blog');
$query->execute();
$blog = $query-> fetchAll(PDO::FETCH_OBJ);
var_dump($blog);