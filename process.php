<?php

    include_once 'includes/mysqli_connect.php';

    if(isset($_POST['saveNewCustomer'])){
        $customer_name = $_POST['name'];

        $stmt = $mysqli->prepare("INSERT INTO customers (customer_name) VALUE (?)");
        $stmt->bind_param("s", $customer_name);
        $stmt->execute();
        $stmt->close();
        header('Location: index.php');
    }

    if(isset($_GET['addWork'])){
        $customer_id = $_GET['addWork'];

        $stmt = $mysqli->prepare("SELECT * FROM worklist WHERE customer_id=?");
        $stmt->bind_param("i", $customer_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $worklists[] = $row;
        }
        if(!$worklists) exit('No rows');
        var_export($worklists, true);
        $stmt->close();
    }

    if(isset($_POST['saveNewWork'])){
        $work_date = $_POST['work_date'];
        $worklist_id = $_POST['worklistID'];
        $work_minutes = $_POST['work_minutes'];

        $stmt = $mysqli->prepare("INSERT INTO work (work_date, worklist_id, work_minutes) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $work_date, $worklist_id, $work_minutes);
        $stmt->execute();
        $stmt->close();
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

    if(isset($_POST['changeActiveStatus'])){
        $customer_id = $_POST['customer_id'];
        $worklist_name = $_POST['worklist_name'];
        $newStatus = $_POST['activeNewStatus'];
        /* echo 'worklist_name: ' . $worklist_name . '<br/>' . 'newStatus: ' . $newStatus; */
        $mysqli->query("UPDATE worklist SET worklist_active = '$newStatus' WHERE worklist_name='$worklist_name' AND customer_id='$customer_id' ;") or die($mysqli->error);
        header('Location: index.php?worklist='.$customer_id);
    }

    if(isset($_POST['deleteWork'])){
        $work_id = $_POST['work_id'];
        $mysqli->query("DELETE FROM work WHERE work_id='$work_id';") or die($mysqli->error);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    
