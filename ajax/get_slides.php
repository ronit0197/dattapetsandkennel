<?php

    include "../database/connection.php";

    $sql = "SELECT * FROM `slides`";
    $result = mysqli_query($conn, $sql);

    $output = "";

    if(mysqli_num_rows($result)){

        while($display = mysqli_fetch_array($result)){

            $output .= '
                <div class="swiper-slide">
                    <img src="'."{$display["image"]}".'" class="w-100 d-block">
                </div>
            ';
    
        }

        echo $output;
    }


?>