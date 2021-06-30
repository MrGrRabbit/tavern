<?php
// connect data based
try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=127.0.0.1;dbname=tavernvisitors-db", "root", "");
    //echo "Database connection established \n";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

