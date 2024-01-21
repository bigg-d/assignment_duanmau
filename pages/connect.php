<?php
     $username = "root";
     $password = "";
     $dbname = "assignment";
    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
         $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    $sql = "select * from product";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll();  
?>    