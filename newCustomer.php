<?php

    include_once 'includes/dbh.inc.php';

    header('Content-Type: application/json');

    $customer_name = $_POST['customerName'];

    $sqlNewCustomer = "INSERT INTO customers (customer_name) VALUES('$customer_name');";
    $sqlNewCustomerResult = mysqli_query($conn, $sqlNewCustomer);
    $sqlNewCustomerResultCheck = mysqli_num_rows($sqlNewCustomerResult);

    if($sqlCustomerResultCheck > 0) {
        echo json_encode('Successfully added new customer');
    } else {
        echo json_encode('Error when trying to add new customer');
    }