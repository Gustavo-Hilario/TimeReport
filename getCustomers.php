<?php

    include_once 'includes/dbh.inc.php';

    header('Content-Type: application/json');

    $sqlCustomer = "SELECT * FROM customers;";
    $sqlCustomerResult = mysqli_query($conn, $sqlCustomer);
    $sqlCustomerResultCheck = mysqli_num_rows($sqlCustomerResult);

    if($sqlCustomerResultCheck > 0) {
        while ($row = mysqli_fetch_assoc($sqlCustomerResult)) {
            $customers[] = $row;
        }
        echo json_encode($customers);
    } else {
        echo json_encode('Error when trying to retrieve all customers');
    }