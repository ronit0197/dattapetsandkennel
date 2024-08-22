<?php

    include "../database/connection.php";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 12;

    $sql = "SELECT * FROM blogs LIMIT $limit OFFSET $offset";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($display = $result->fetch_assoc()) {

            if (strlen($display["blog"]) > 100){
                $stringCut = substr($display["blog"], 0, 100);
            }else{
                $stringCut = $display["blog"];
            }

            echo '
                <div class="col-lg-2 mb-3 d-flex justify-content-center">
                    <div class="card">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            new
                        </span>
                        <div class="card-body">
                            <h5 class="card-title">'."{$display["blog_title"]}".'</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Topic - '."{$display["blog_topic"]}".'</h6>
                            <p class="card-text">'."{$stringCut}".'....</p>
                            <a href="./read_blog.php?id='."{$display["id"]}".'" class="card-link nav-link">Read full blog...</a>
                        </div>
                    </div>
                </div>
            ';
        }
    } else {
        echo "No more items to load";
    }

    $conn->close();

    

?>