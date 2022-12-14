<?php
include_once "DbConfig.php";
include_once "Crud.php";
$crud = new Crud();
if(isset($_POST['delete-product-btn']) && $_POST['delete_id']){
    $all_id = $_POST['delete_id'];
    $extract_id = implode(",", $all_id);
    $crud->delete("DELETE from user_table WHERE id in ($extract_id)");
    header("location: ../frontside/index.php");
} else {
    header("location: ../frontside/index.php");
}