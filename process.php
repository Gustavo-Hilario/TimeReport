<?php

    include_once 'includes/mysqli_connect.php';

    // RETRIEVING CUSTOMERS
        $sql ="SELECT c.*, cs.customer_remaining_minutes FROM customers c LEFT JOIN customer_sums cs ON c.customer_id = cs.customer_id;";
        $resultCustomers = mysqli_query($mysqli, $sql);
        $resultCustomersCheck = mysqli_num_rows($resultCustomers);
        
        if($resultCustomersCheck > 0){
            while($row = $resultCustomers->fetch_assoc()) {
                $customers[] = $row;
            }
            var_export($customers, true);
        } else {
            $response = [$customers=[], $errorRetrievingCustomers=true, $error=true, $message='Customers not found. Add a new customer!'];
            var_export($response, true);
        }

    if(isset($_POST['saveNewCustomer'])){
        $customer_name = $_POST['name'];

        $sql = "INSERT INTO customers (customer_name) VALUE ('$customer_name');";
        $mysqli->query($sql) or die($mysqli->error);
        header('Location: index.php');
    }

    if(isset($_POST['saveNewToWorklist'])){
        $worklist_name = $_POST['worklist_name'];
        $customer_id = $_POST['customer_id'];
        $worklist_total_minutes = $_POST['worklist_total_minutes']*60;
        $worklist_active = $_POST['worklist_active'];

        $sql = "INSERT INTO worklist (worklist_name, customer_id, worklist_total_minutes, worklist_active) 
                VALUES ('$worklist_name', '$customer_id', '$worklist_total_minutes', '$worklist_active');";
        $mysqli->query($sql) or die($mysqli->error);
        header("Location: index.php?worklist=$customer_id");
    }

    if(isset($_GET['addWork'])){
        $customer_id = (int)$_GET['addWork'];

        $sql = "SELECT * FROM worklist WHERE customer_id='$customer_id' ;";
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = $result->fetch_assoc()) {
                $worklists[] = $row;
            }
            var_export($worklists, true);
        } else {
            $response = [$worklists=[], $error=true, $message='Worklist not found. Add work to worklist first in the next action!'];
            var_export($response, true);
        }

    }

    if(isset($_POST['saveNewWork'])){
        $work_date = $_POST['work_date'];
        $worklist_id = (int)$_POST['worklistID'];
        $work_minutes = $_POST['work_minutes'];

        $sql = "INSERT INTO work (work_date, worklist_id, work_minutes) VALUES ('$work_date', '$worklist_id', '$work_minutes');";
        $mysqli->query($sql) or die($mysqli->error);
        header('Location: index.php');
    }

    if(isset($_GET['worklist'])){
        $customer_id = (int)$_GET['worklist'];

        $sql = "SELECT wk.*, ws.worklist_worked_minutes, ws.worklist_remaining_minutes FROM worklist wk LEFT JOIN worklist_sums ws ON wk.worklist_id = ws.worklist_id WHERE wk.customer_id='$customer_id';";
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = $result->fetch_assoc()) {
                $worklists[] = $row;
            }
            var_export($worklists, true);
        } else {
            $response = [$worklists=[], $error=true, $message='Worklist not found. Add work to worklist here!'];
            var_export($response, true);
        }
    }

    if(isset($_POST['changeActiveStatus'])){
        $customer_id = (int)$_POST['customer_id'];
        $worklist_name = $_POST['worklist_name'];
        $newStatus = (int)$_POST['activeNewStatus'];

        $sql = "UPDATE worklist SET worklist_active='$newStatus' WHERE worklist_name='$worklist_name' AND customer_id='$customer_id' ;";
        $mysqli->query($sql) or die($mysqli->error);
        header("Location: index.php?worklist=$customer_id");
    }

    if(isset($_GET['customerReport'])){
        $customer_id = $_GET['customerReport'];

        $sql = "SELECT w.*, wl.worklist_name, wl.worklist_active FROM work w LEFT JOIN worklist wl ON w.worklist_id = wl.worklist_id WHERE wl.customer_id='$customer_id' ;";
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = $result->fetch_assoc()) {
                $works[] = $row;
            }
            var_export($works, true);
        } else {
            $response = [$works=[], $error=true, $message='Works not found. Add work first ...'];
            var_export($response, true);
        }
    }

    if(isset($_GET['allCustomersReport'])){

        $sql = "SELECT w.*, wl.worklist_name, wl.worklist_active, c.customer_name FROM work w 
                LEFT JOIN worklist wl ON w.worklist_id = wl.worklist_id 
                LEFT JOIN customers c ON wl.customer_id = c.customer_id;";
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = $result->fetch_assoc()) {
                $works[] = $row;
            }
            var_export($works, true);
        } else {
            $response = [$works=[], $error=true, $message='Works not found. Add work first ...'];
            var_export($response, true);
        }
    }

    if(isset($_POST['deleteWork'])){
        $work_id = (int)$_POST['work_id'];

        $sql = "DELETE FROM work WHERE work_id='$work_id'";
        $mysqli->query($sql) or die($mysqli->error);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
