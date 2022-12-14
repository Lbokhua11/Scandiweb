<?php
include_once "../mms/AddingController.php";


$AddContentController = new AddContentController();

$Selects = $AddContentController->selectData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>TestTasksLevanBokhua</title>
</head>
<body>
  
    <div id="flex" style="display: flex;  flex-direction: column;">
    <div id="header" style="order: 1;">
        <div id="title"><h1>Scandiweb</h1></div>
        <div id="buttons" style="display: flex;">
        <div id="headbox" style="display: flex;">
        <button onclick="location.href='addcontent.php'"><h4>Add</h4></button>
        <form action="../mms/Delete.php" method="post">
        <button type="submit" name="delete-product-btn" id="delete-product-btn"><h4 id="changeback" style="background-color: red;">Mass Delete</h4></button>
        
        
        </div>
        </div>
    </div>
    
    <div id="main-content" style="background-color:gray; order:2;">
    <hr style="background-color:black;"></hr>
    <div id="main-boxes" style="margin-left:200px;width:70%;display: flex; flex-wrap:wrap;align-items: center;
  justify-content: center;">
  
    <?php  foreach($Selects as $key=>$select){ ?>
    
        
                <div class="boxes" style="text-align: center;">
                <input type="checkbox" name="delete_id[]" class="delete-checkbox" value="<?=$select['id']?>">
                <p><?= $select['sku']?></p>
                <p><?= $select['nname']?></p>
                <p><?= $select['price']?> $</p>
               
                <?php
                 if($select['ttype'] == 'DVD'){
                    ?><p>Size: <?= $select['size']?> MB</p><?php
                }else if($select['ttype'] == 'Furniture'){
                    ?><p>Dimension: <?= $select['width']?>x<?= $select['height']?>x<?= $select['llength']?></p><?php
               
                }else if($select['ttype']== 'Book'){
                    ?><p>Weight: <?= $select['wweight']?> KG</p><?php
                }
                ?>
                

            
       
    </div>
    <?php } ?>
    </div>
    </div>
            </form>
    <?php
    
    include "footer.php";
    ?>

    
</div>  
</body>
</html>