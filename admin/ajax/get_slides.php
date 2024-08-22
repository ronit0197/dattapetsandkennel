<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `slides`";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    $output = "";

    if(mysqli_num_rows($result)){

        while($display = mysqli_fetch_array($result)){

            $i++;
            $output .= '
                <div class="col-lg-4 mb-3">
                    <div class="slide-wraper">
                        <img src="../'."{$display["image"]}".'" class="img-fluid" alt="...">
                        <form action="./ajax/delete_slides.php" method="POST" class="bg-primary">
                            <input type="hidden" name="galaryImageId" value="'."{$display["id"]}".'">
                            <input type="hidden" name="galaryImage" value="'."{$display["image"]}".'">
                            <button type="submit" name="delete_image" class="btn btn-danger delete-image shadow"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>
            ';
    
        }

        echo $output;
    }


?>