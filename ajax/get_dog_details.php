<?php

    include "../database/connection.php";

    $id = $_POST['id'];

    // Fetch the data from the database
    $sql = "SELECT * FROM `dogs` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    
        $status = '';
    
        if ($row['quantity'] > 0) {
            $status = 'available';
        } else {
            $status = 'out of stock';
        }
    
        // Define the discount rate (e.g., 10% discount)
        $discountRate = floatval($row['discount'])/100; // 10% discount
    
        // Calculate the new price
        $oldPrice = $row['price'];
        $newPrice = $oldPrice - ($oldPrice * $discountRate);
    
        // Prepare the data as an associative array
        $data = [
            'breed' => $row['breed'],
            'description' => $row['description'],
            'origin' => $row['origin'],
            'oldprice' => $oldPrice,
            'weight' => $row['waight'],
            'color' => $row['color'],
            'sex' => $row['sex'],
            'image' => $row['image'],
            'newprice' => $newPrice,
            'quantity' => $row['quantity'],
            'status' => $status
        ];
    
        // Send the data as a JSON response
        echo json_encode($data);
    } else {
        // If no record is found, send an error message
        echo json_encode(['error' => 'No record found.']);
    }
    

    // Close the database connection
    mysqli_close($conn);
?>
