<?php
if (isset($_GET['search'])) {

    $search = $_GET['search'];

    // Database connection
    include "../database/connection.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Split search terms into individual keywords and sanitize them
    $keywords = preg_split('/\s+/', $conn->real_escape_string($search));

    // Build the SQL query dynamically
    $sql = "SELECT * FROM `dogs` WHERE ";
    $keywordConditions = [];

    foreach ($keywords as $keyword) {
        $keyword = trim($keyword);
        if (!empty($keyword)) {
            $fieldConditions = [];
            // Use LIKE for other fields
            foreach (['breed', 'description', 'origin', 'price', 'waight', 'color'] as $field) {
                $fieldConditions[] = "$field LIKE '%$keyword%'";
            }
            // Use exact match for 'sex' field
            $fieldConditions[] = "sex = '$keyword'";

            // Combine conditions for the current keyword using OR
            $keywordConditions[] = '(' . implode(' OR ', $fieldConditions) . ')';
        }
    }

    if (!empty($keywordConditions)) {
        // Combine conditions for all keywords using AND
        $sql .= implode(' AND ', $keywordConditions);
    } else {
        $sql .= '1'; // If no keywords are provided, this will always be true, essentially selecting all rows
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($display = $result->fetch_assoc()) {

            if (strlen($display["description"]) > 100){
                $stringCut = substr($display["description"], 0, 100);
            }else{
                $stringCut = $display["description"];
            }

            $originalPrice = $display["price"];
            $discount = intval($originalPrice) * (intval($display["discount"])/100);
            $discountedPrice = intval($display["price"]) - intval($discount);

            echo '
                <div class="col-lg-6 mb-lg-3 mb-md-3 mb-3">
                    <div class="card shadow">
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

        if($result->num_rows > 9){
            echo '
                <div class="container w-100 text-center my-5">
                    <button class="btn btn-outline-secondary load-more" id="loadMore">Load more</button>
                </div>
            ';
        }
        
    } else {
        echo "<h2 class='text-muted fw-bold'>No results found</h2>";
    }

    $conn->close();
} else {
    echo "No query provided.";
}
?>


