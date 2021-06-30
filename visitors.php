<?php
   include_once "visitors_db.php";
   include_once "musicSelection.php";

         //Запрос в БД для Танцев
   
   $sql = "SELECT * FROM visitors where genre = '".$musicGenre."'";
   $result = $conn->query($sql);
   
         //Запрос в БД для Бара
   $sqlBar = "SELECT * FROM visitors where genre != '".$musicGenre."'";
   $resultBar = $conn->query($sqlBar);
   
   

?>