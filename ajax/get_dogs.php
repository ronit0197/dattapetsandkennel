<?php

    include "../database/connection.php";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 12;

    $sql = "SELECT * FROM dogs LIMIT $limit OFFSET $offset";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($display = $result->fetch_assoc()) {

            if (strlen($display["description"]) > 100){
                $stringCut = substr($display["description"], 0, 100);
            }else{
                $stringCut = $display["description"];
            }

            $originalPrice = $display["price"];
            $discount = intval($originalPrice) * (intval($display["discount"])/100);
            $discountedPrice = intval($display["price"]) - intval($discount);

            echo '
                <div class="col-lg-3 d-flex justify-content-center mb-lg-4 mb-md-4 mb-4">
                    <div class="card w-100 shadow">
                        <img src="./'."{$display["image"]}".'" class="card-img-top dog-card-image" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'."{$display["breed"]}".'</h5>
                            <p class="card-text">
                                '."{$stringCut}".'....
                            </p>
                            <div class="d-flex align-items-center">
                                <p><i class="bi bi-currency-rupee"></i>'."{$discountedPrice}".'</p>
                                <p class="text-decoration-line-through text-secondary ms-2" style="font-size: 11px;"><i
                                        class="bi bi-currency-rupee"></i>'."{$originalPrice}".'</p>
                            </div>
                            <div class="d-flex">
                                <p class="text-secondary me-3" style="font-size: 12px;">Available - '."{$display["quantity"]}".'</p>
                                <p class="text-secondary me-3" style="font-size: 12px;">'."{$display["sex"]}".' - '."{$display["waight"]}".'kg</p>
                            </div>
                            <div>
                                <p class="text-secondary" style="font-size: 12px;">Origin - '."{$display["origin"]}".'</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="./dog_details.php?id='."{$display["id"]}".'" class="nav-link">View more...</a>
                                <a href="tel:9836176084" class="btn btn-outline-dark">Order Now</a>
                            </div>
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