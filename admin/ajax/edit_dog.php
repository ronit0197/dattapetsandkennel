<?php

    include "../../database/connection.php";

    $id = $_POST["id"];

    $breed = $_POST["name"];
    $origin = $_POST["origin"];
    $sex = $_POST["sex"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $color = $_POST["color"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];

    $oldImage = $_POST["oldImage"];


    $file = $_FILES['dogImageFile'];

    $filename = $file['name']; //extracting file name
    $fileerror = $file['error']; //extracting file error
    $filetemp = $file['tmp_name']; //extracting file temp_name
    $fileextention = explode(".", $filename); //extracting file extention

    $fileactualextension = strtolower(end($fileextention)); //lower casing file extention

    $randomNumber = rand(10,100000);

    $destination = "../../images/pets/".$randomNumber.$filename;
    $uplodable_image = "images/pets/".$randomNumber.$filename;

    $fileextentionsorted = array('png', 'jpg', 'jpeg', 'pdf', 'wbp'); //restrict the file types

    if($filename){

        if(in_array($fileactualextension,$fileextentionsorted)){

                $sql = "UPDATE `dogs` SET `breed`='$breed',`description`='$description',`origin`='$origin',`price`='$price',`waight`='$weight',`color`='$color',`sex`='$sex',`image`='$uplodable_image',`discount`='$discount',`quantity`='$quantity',`date&time`=current_timestamp() WHERE id='$id'";
                $result = mysqli_query($conn, $sql);

                if($result){

                    unlink("../../".$oldImage);
                    move_uploaded_file($filetemp, $destination);
                    echo "updated successfully";
        
                }else{
                    echo "not_updated";
                }
        
            }else{
                echo "invalid file";
        }

    }else{
    
        $sql = "UPDATE `dogs` SET `breed`='$breed',`description`='$description',`origin`='$origin',`price`='$price',`waight`='$weight',`color`='$color',`sex`='$sex',`image`='$oldImage',`discount`='$discount',`quantity`='$quantity',`date&time`=current_timestamp() WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){

            echo "updated successfully";

        }else{
            echo "not_updated";
        }
    }

?>