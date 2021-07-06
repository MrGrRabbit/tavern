<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Visitors;

class VisitorsController extends Controller
{
   public function actionIndex($genre ='Rock')
   {  
      $data = Visitors::getAll($genre);
      $playNow = $genre;
      $NotData = Visitors::NotGetAll($genre);

      return $this->render('index', [
                                       'arrayInView' => $data, 
                                       'NotArrayInView' => $NotData, 
                                       'genre' => $genre, 
                                       'playNow' => $genre
                                    ]);
   
   }
}
