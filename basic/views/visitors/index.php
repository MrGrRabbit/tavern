<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<div>
   <h1>Visitors</h1>
   
   <div class="col-lg-4">
      <h4 style="text-align: center">CLUB</h4>
      <div class="cont">
         <ul>
            <?php foreach($arrayInView as $item): ?>
               <li>
                  <?php echo $item->name ?>  танцует сейчас под   <?php echo $genre; ?> 
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>

   <div class="col-lg-4">
      <h4 style="text-align: center">BAR</h4>
      <div class="cont">
         <ul>
            <?php foreach($NotArrayInView as $item): ?>
               <li>
                  <?php echo $item->name ?> сейчас выпивает в баре
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>

   <div class="col-lg-4" style="text-align: justify">
      <?= Html::beginForm(['index', 'id' => $id], 'get', ['enctype' => 'multipart/form-data']) ?>
         <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button name="genre" value="Rock" type="submit" class="btn btn-outline-primary">Rock</button>
            <button name="genre" value="Pop" type="text" class="btn btn-outline-primary">Pop</button>
            <button name="genre" value="Jazz" type="submit" class="btn btn-outline-primary">Jazz</button>
            <button name="genre" value="Disco" type="submit" class="btn btn-outline-primary">Disco</button>
         </div>      
      <?= Html::endForm() ?>
   <div class="player"><b>Playing now:  <?php echo $playNow?></b></div>
</div>   

</div>