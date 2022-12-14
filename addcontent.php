<?php
include_once "../mms/AddingController.php";
$AddContentController = new AddContentController();
$Selects = $AddContentController->selectData();

if(($_SERVER['REQUEST_METHOD'] == 'POST')){
    foreach($Selects as $key=>$select){}
    $sku = $_POST['sku'];
    if($sku== $select['sku']){
        echo "<p style='color:white;'>!SKU Already Exists with the name of $sku, try again with another unique SKU!</p>";
    }else{
        include_once "../mms/AddingController.php";
        $AddContentController = new AddContentController();
        $AddContentController->addContent();
        header("location: index.php");
    }

    
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="flex" style="display: flex;  flex-direction: column;">
<div id="header" style="order: 1;">
        <div id="title"><h1 >Product Add</h1></div>
        <div id="buttons" style="display: flex;" >
        <H1 style="margin-top:20px;margin-left:450px;"><a href="index.php">Display Page</a></h1>
        <div id="headbox" style="display: flex;">
        </div>
        </div>
    </div>
    <div id="add-product-div">
        <div id="leftside-form">
       
            <form action="#" id="product_form" method="post">
    <label style="color: white;"> SKU : </label><input type="text" name="sku" style="margin-left:90px; background-color:white;border-radius:10px;" required><br><br><br>
    <label style="color: white;"> NAME : </label><input type="text" name="name"  style="margin-left:75px; background-color:white;border-radius:10px;" required><br><br><br>
    <label style="color: white;"> PRICE : </label><input type="text" name="price"  style="margin-left:75px; background-color:white;border-radius:10px;" required><br><br><br>
    <label style="color: white;"> TYPE SWITCHER: </label>
    <select name="productType" id="productType" onchange="changer()" style="color: black; margin-left:40px; background-color:white;border-radius:5px;">
      <option style="color:black;" value="Furniture">Furniture</option>

      <option style="color:black;" value="DVD">DVD</option>

      <option style="color:black;" value="Book">Book</option>
  </select><br><br>
  <br><br>
    <div id="test" style='color: white;'></div><br><br>
    <div id="test1" style='color: white;'></div><br><br>
    <div id="test2" style='color: white;'></div><br><br>
    <div id="headboxtwo" style="display: flex;">
    <button type="submit" value="submit" >Save</button>
    
    <button value="cancel" onclick="location.href='addcontent.php'" style="background-color: red;">Cancel</button>
    </div>
    </form>
    <script src="app.js">
   
    </script>

        </div>  
       

    </div>
<?php
    include "footer.php";
?>
</body>
</html>

