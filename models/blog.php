<?php

require 'core/db.php';
// get data from db
$query = $conn->prepare('SELECT * FROM blog');
$query->execute();
$blog = $query->fetchAll(PDO::FETCH_OBJ);
var_dump($blog);


class blogmodel{
    private $db;
    public function __construct(){
        $this->db = new DB();
}

public function read(){
    $sql = 'SELECT * FROM blog';
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $blog = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blog;
}

}