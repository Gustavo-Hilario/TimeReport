<?php

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "time_report";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

/* 
$sqlCustomer = "SELECT * FROM customers;";
$sqlCustomerResult = mysqli_query($conn, $sqlCustomer);
$sqlCustomerResultCheck = mysqli_num_rows($sqlCustomerResult);

if($sqlCustomerResultCheck > 0) {
    while ($row = mysqli_fetch_assoc($sqlCustomerResult)) {
        $customers[] = $row;
    }
}

$sqlWorks = "SELECT * FROM work;";
$sqlWorksResult = mysqli_query($conn, $sqlWorks);
$sqlWorksResultCheck = mysqli_num_rows($sqlWorksResult);

if($sqlWorksResultCheck > 0) {
    while ($row = mysqli_fetch_assoc($sqlWorksResult)) {
        $works[] = $row;
    }
}

$sqlWorklists = "SELECT * FROM worklist;";
$sqlWorklistsResult = mysqli_query($conn, $sqlWorklists);
$sqlWorklistsResultCheck = mysqli_num_rows($sqlWorklistsResult);

if($sqlWorksResultCheck > 0) {
    while ($row = mysqli_fetch_assoc($sqlWorklistsResult)) {
        $worklists[] = $row;
    }
} 
*/