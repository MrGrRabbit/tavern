<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <title>TAVERN</title>
</head>
<body>
   <div class="container" style="margin: 50px;">
      <div class="row">
        <div class="col-sm p-3 border bg-light">
            CLUB
            <?php 
            include_once "visitors.php";
            include_once "musicSelection.php";
            
            echo "<ul>";
              while($row = $result->fetch(PDO::FETCH_OBJ)){
                // Обработка данных
                echo '<li><b>' . $row->name . " is dancing to " . $row->genre . '</b></li>';
              }
               echo "</ul>";
                ?>

        </div>
        <div class="col-sm p-3 border bg-light">
             BAR
            <?php 
              include_once "visitors.php";
                echo "<ul>";
              while($rowBar = $resultBar->fetch(PDO::FETCH_OBJ)){
                // Обработка данных
                echo '<li><b>' . $rowBar->name . ' is drinking at the bar' . '</b></li>';
              }
              echo "</ul>";
            ?>
        </div>
        <div class="col-sm">
            <form action="" method="get">
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button name="genre" value="Rock" type="submit" class="btn btn-outline-primary">Rock</button>
                <button name="genre" value="Pop" type="text" class="btn btn-outline-primary">Pop</button>
                <button name="genre" value="Jazz" type="submit" class="btn btn-outline-primary">Jazz</button>
                <button name="genre" value="Disco" type="submit" class="btn btn-outline-primary">Disco</button>
              </div>
            </form>
            <div class="player"><b>Playing now: <?php echo $musicGenre ?></b></div>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown">
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>