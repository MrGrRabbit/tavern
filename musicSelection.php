<?php
   //Выбор жанра
   $genre = null;
   $genre = $_GET["genre"];
   if($genre === null){
      $musicGenre = "Rock";
   }
   else{
      $musicGenre = $genre;
      echo $musicGenre; 
   }
   