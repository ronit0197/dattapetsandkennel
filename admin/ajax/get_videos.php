<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `videos`";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    $output = "";

    if(mysqli_num_rows($result)){

        while($display = mysqli_fetch_array($result)){

            $i++;
            $output .= '
                <div class="col-lg-3 mb-3 position-relative p-1">
                    <video class="w-100" height="240" controls>
                        <source src="../'."{$display["video"]}".'" type="video/mp4">
                        <source src="../'."{$display["video"]}".'" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <form action="./ajax/delete_video.php" method="POST">
                        <input type="hidden" name="galaryVideoId" value="'."{$display["id"]}".'">
                        <input type="hidden" name="galaryVideo" value="'."{$display["video"]}".'">
                        <button type="submit" name="delete_video" class="btn btn-danger delete-video shadow w-100"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            ';
    
        }

        echo $output;
    }


?>