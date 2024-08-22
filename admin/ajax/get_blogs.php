<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `blogs`";
    $result = mysqli_query($conn, $sql);

    $output = "";

    if(mysqli_num_rows($result) > 0){

        while($display = mysqli_fetch_array($result)){

            if (strlen($display["blog"]) > 50){
                $stringCut = substr($display["blog"], 0, 50);
            }else{
                $stringCut = $display["blog"];
            }

            $output .= '
                <div class="col-lg-3 mb-3 blog-table">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title w-100">'."{$display["blog_title"]}".'</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Topic - '."{$display["blog_topic"]}".'</h6>
                            <p class="card-text">'."{$stringCut}".'....</p>
                            <div class="d-flex">
                                <a href="edit_blog.php?id='."{$display["id"]}".'" class="btn btn btn-warning"><i
                                    class="bi bi-pencil"></i></a>
                                <form action="./ajax/delete_blog.php" method="POST">
                                    <input type="hidden" name="blogId" value="'."{$display["id"]}".'">
                                    <button name="delete_blog" class="btn btn-danger ms-3"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ';
    
        }

        echo $output;

    }

?>