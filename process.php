<?php

    include_once 'includes/dbh.inc.php';
    

    if(isset($_POST['saveNewCustomer'])){
        $customer_name = $_POST['name'];
        $mysqli->query("INSERT INTO customers (customer_name) VALUE ('$customer_name')") or die($mysqli->error);
        header('Location: index.php');
    }

    if(isset($_GET['addWork'])){
        $customer_id = $_GET['addWork'];
        $mysqli->query("SELECT * FROM worklist WHERE customer_id=$customer_id;") or die($mysqli->error);
    }

    if(isset($_POST['saveNewWork'])){
        $work_date = $_POST['work_date'];
        $worklist_id = $_POST['worklistID'];
        $work_minutes = $_POST['work_minutes'];
        $mysqli->query("INSERT INTO work (work_date, worklist_id, work_minutes) VALUES ('$work_date', '$worklist_id' , '$work_minutes')") or die($mysqli->error);
        header('Location: index.php');
    }

    if(isset($_POST['saveNewToWorklist'])){
        $worklist_name = $_POST['worklist_name'];
        $customer_id = $_POST['customer_id'];
        $worklist_total_minutes = $_POST['worklist_total_minutes'];
        $worklist_active = $_POST['worklist_active'];
        $mysqli->query("INSERT INTO worklist (worklist_name, customer_id, worklist_total_minutes, worklist_active) 
                        VALUES ('$worklist_name', '$customer_id' , '$worklist_total_minutes', '$worklist_active')") 
                        or die($mysqli->error);
        header('Location: index.php');
    }

