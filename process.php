<?php

    include_once 'includes/mysqli_connect.php';

    // RETRIEVING CUSTOMERS
        $stmt = $mysqli->prepare("SELECT c.*, cs.customer_remaining_minutes FROM customers c LEFT JOIN customer_sums cs ON c.customer_id = cs.customer_id");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $customers[] = $row;
        }
        if(isset($customers)){
            var_export($customers, true);
        } else {
            $response = [$customers=[], $errorRetrievingCustomers=true, $error=true, $message='Customers not found. Add a new customer!'];
            var_export($response, true);
        }
        $stmt->close();

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
        if(isset($worklists)){
            var_export($worklists, true);
        } else {
            $response = [$worklists=[], $error=true, $message='Worklist not found. Add work to worklist first in the next action!'];
            var_export($response, true);
        }
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
        $worklist_total_minutes = $_POST['worklist_total_minutes']*60;
        $worklist_active = $_POST['worklist_active'];

        $stmt = $mysqli->prepare("INSERT INTO worklist (worklist_name, customer_id, worklist_total_minutes, worklist_active) 
                VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $worklist_name, $customer_id, $worklist_total_minutes, $worklist_active);
        $stmt->execute();
        $stmt->close();
        header("Location: index.php?worklist=$customer_id");
    }

    if(isset($_GET['worklist'])){
        $customer_id = $_GET['worklist'];

        $stmt = $mysqli->prepare("SELECT wk.*, ws.worklist_worked_minutes, ws.worklist_remaining_minutes FROM worklist wk LEFT JOIN worklist_sums ws ON wk.worklist_id = ws.worklist_id WHERE wk.customer_id=?");
        $stmt->bind_param("i", $customer_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $worklists[] = $row;
        }
        if(isset($worklists)){
            var_export($worklists, true);
        } else {
            $response = [$worklists=[], $error=true, $message='Worklist not found. Add work to worklist here!'];
            var_export($response, true);
        }
        $stmt->close();
    }

    if(isset($_POST['changeActiveStatus'])){
        $customer_id = $_POST['customer_id'];
        $worklist_name = $_POST['worklist_name'];
        $newStatus = $_POST['activeNewStatus'];

        $stmt = $mysqli->prepare("UPDATE worklist SET worklist_active = ? WHERE worklist_name=? AND customer_id=?");
        $stmt->bind_param("isi", $newStatus, $worklist_name, $customer_id);
        $stmt->execute();
        $stmt->close();
        header("Location: index.php?worklist=$customer_id");
    }

    if(isset($_GET['customerReport'])){
        $customer_id = $_GET['customerReport'];

        $stmt = $mysqli->prepare("SELECT w.*, wl.worklist_name, wl.worklist_active FROM work w LEFT JOIN worklist wl ON w.worklist_id = wl.worklist_id WHERE wl.customer_id=?");
        $stmt->bind_param("i", $customer_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $works[] = $row;
        }
        if(isset($works)){
            var_export($works, true);
        } else {
            $response = [$works=[], $error=true, $message='Worklist not found. Add work to worklist first in the previous action!'];
            var_export($response, true);
        }
        var_export($works, true);
        $stmt->close();
    }

    if(isset($_GET['allCustomersReport'])){

        $stmt = $mysqli->prepare("SELECT w.*, wl.worklist_name, wl.worklist_active, c.customer_name FROM work w LEFT JOIN worklist wl ON w.worklist_id = wl.worklist_id LEFT JOIN customers c ON wl.customer_id = c.customer_id");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
            $works[] = $row;
        }
        if(isset($works)){
            var_export($works, true);
        } else {
            $response = [$works=[], $error=true, $message='Worklist not found. Add work to worklist first!'];
            var_export($response, true);
        }
        var_export($works, true);
        $stmt->close();
    }

    if(isset($_POST['deleteWork'])){
        $work_id = $_POST['work_id'];

        $stmt = $mysqli->prepare("DELETE FROM work WHERE work_id=?");
        $stmt->bind_param("i", $work_id);
        $stmt->execute();
        $stmt->close();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    
