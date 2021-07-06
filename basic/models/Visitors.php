<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Visitors;
use yii\base\Model;

class Visitors extends \yii\db\ActiveRecord
{
   public $genre;

   public static function tableName()
   {
      return 'visitors';
   }
   public static function getAll($genre)
   {
      $genre = 'Rock';

      if(isset($_GET['genre'])){
         $genre = $_GET['genre'];
      }

      $sql = "SELECT * FROM visitors where FIND_IN_SET( '".$genre."', genre)";
      $data = self::findBySql($sql)->all(); 

      return $data;
   }
   public static function NotGetAll($genre)
   {
      $genre = 'Rock';

      if(isset($_GET['genre'])){
         $genre = $_GET['genre'];
      }

      $sql = "SELECT * FROM visitors where NOT FIND_IN_SET ( '".$genre."', genre)";
      $NotData = self::findBySql($sql)->all();

      return $NotData;
   }
}
