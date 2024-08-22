<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `galary_images`";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    $output = "";

    if(mysqli_num_rows($result)){

        while($display = mysqli_fetch_array($result)){

            $i++;
            $output .= '
                <div class="col-lg-3 mb-3 position-relative galary-image">
                    <img src="../'."{$display["image"]}".'" class="img-thumbnail rounded mx-auto d-block" alt="galary-image">
                    <form action="./ajax/delete_galary.php" method="POST">
                        <input type="hidden" name="galaryImageId" value="'."{$display["id"]}".'">
                        <input type="hidden" name="galaryImage" value="'."{$display["image"]}".'">
                        <button type="submit" name="delete_image" class="btn btn-danger delete-image shadow"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            ';
    
        }

        echo $output;
    }


?>