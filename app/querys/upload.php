<?php
use app\services\App;
$conn = mysqli_connect("localhost","root","","Galanix");
if (isset($_POST["submit"])){
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0 && $_FILES["file"]["size"] < 1000000){
        $file = fopen($fileName,'r');
        while (($column = fgetcsv($file,10000,","))!==FALSE){
            $sqlinsert = "Insert into users (UID,Name,Age,Email,Phone,Gender) values ('" . $column[0]."','" . $column[1]."','" . $column[2]."','" . $column[3]."','" . $column[4]."','" . $column[5]."')";
            $result = mysqli_query($conn,$sqlinsert);
            if (!empty($result)){
                echo "Csv data imported into database";
            }else{
                echo "error";

            }
            header("Location:/../views/pages/LoadDataP.html");
        }
    }
}