<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `you_tube_links`";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    $output = "";

    if(mysqli_num_rows($result)){

        while($display = mysqli_fetch_array($result)){

            $i++;
            $output .= '
                <div class="col-lg-3 mb-3 position-relative p-1">
                    '."{$display["links"]}".'
                    <form action="./ajax/delete_video.php" method="POST">
                        <input type="hidden" name="galaryVideoId" value="'."{$display["id"]}".'">
                        <button type="submit" name="delete_link" class="btn btn-danger delete-video shadow w-100"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            ';
    
        }

        echo $output;
    }


?>