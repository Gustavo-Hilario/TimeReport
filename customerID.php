<?php

    include_once 'includes/dbh.inc.php';

$customer_id = $_GET['customerID'];

$sqlCustomerWorklist = "SELECT * FROM worklist WHERE customer_id=$customer_id;";
$sqlCustomerWorklistResult = mysqli_query($conn, $sqlCustomerWorklist);
$sqlCustomerWorklistResultCheck = mysqli_num_rows($sqlCustomerWorklistResult);

if($sqlCustomerWorklistResultCheck > 0) {
    while ($row = mysqli_fetch_assoc($sqlCustomerWorklistResult)) {
        $customerWorklist[] = $row;
    }
} else {
    echo "Error when retrieve worklist of this customer";
}

print_r($customerWorklist);