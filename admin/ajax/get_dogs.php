<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `dogs`";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    $output = "";

    if(mysqli_num_rows($result) > 0){

        while($display = mysqli_fetch_array($result)){

            $i++;
            $output .= '
                    <tr>
                        <th scope="row" style="font-size: 10px;">'."{$i}".'</th>
                        <td style="font-size: 12px;">'."{$display["breed"]}".'</td>
                        <td><img src="../'."{$display["image"]}".'" alt="PIC" width="50"></td>
                        <td style="font-size: 12px;">'."{$display["sex"]}".'</td>
                        <td class="text-sm" style="font-size: 12px;"><i class="bi bi-currency-rupee me-2"></i>'."{$display["price"]}".'</td>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-lg-3 col-12 mb-lg-0 mb-md-2 mb-2">
                                    <form action="./ajax/delete_dog.php" method="POST">
                                        <input type="hidden" name="dogId" value="'."{$display["id"]}".'">
                                        <input type="hidden" name="dogImage" value="'."{$display["image"]}".'">
                                        <button type="submit" name="delete_dog" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <a href="edit_dog.php?id='."{$display["id"]}".'" class="btn btn-sm btn-warning ms-lg-3 ms-md-0 ms-0"><i
                                            class="bi bi-pencil"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
            ';
    
        }

        echo $output;

    }


?> 