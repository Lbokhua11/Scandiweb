<?php
include_once "Crud.php";

class AddContentController {

    private $crud;

    public function __construct()
    {
        $this->crud = new Crud();
    }

    public function addContent(){
        if($_POST['productType'] == 'DVD'){
            $size = $_POST['size'];
            $height = 'none';
            $width = 'none';
            $length = 'none';
            $weight = 'none';
        }else if($_POST['productType'] == 'Furniture'){
            $size = 'none';
            $height = $_POST['height'];
            $width = $_POST['width'];
            $length = $_POST['length'];
            $weight = 'none';
        }else if($_POST['productType']== 'Book'){
            $size = 'none';
            $height = 'none';
            $width = 'none';
            $length = 'none';
            $weight = $_POST['weight'];
        }
        
        $content_data = [
            'sku' => $_POST['sku'],
            'nname' => $_POST['name'],
            'price' => $_POST['price'],
            'ttype' => $_POST['productType'],
            'size' => $size,
            'height' => $height,
            'width' => $width,
            'llength' => $length,
            'wweight' => $weight,
        ];

        $this->crud->create($content_data, 'user_table');
    }
    public function selectData(){

        $query = "SELECT id, sku, nname, price, ttype, size, height, width, llength, wweight FROM user_table";

        $results = $this->crud->read($query);
        return $results;
    }
}