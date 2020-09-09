<?php
    include_once 'includes/mysqli_connect.php';
    include_once 'process.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="./public/stylesheets/main.css">

    <title>Time Report</title>
</head>
<body class="b-light">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <!-- CUSTOMERS TABLE -->
        <div id="customersTable">
            <div class="table-responsive">
                <table class="table table-sm table-dark table-striped table-borderless table-hover text-center rounded">
                    <thead>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Actions</th>
                        <th>Hour Total</th>
                    </thead>
                    <tbody>
                        <?php foreach ($customers as $key => $customer): ?>
                            <tr>
                                <td><?php echo $customer['customer_id'] ?></td>
                                <td><?php echo $customer['customer_name'] ?></td>
                                <td>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <a href="index.php?addWork=<?php echo $customer['customer_id'] ?>" class="addWorkButton">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32" width="32" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
                                                <g>
                                                    <rect x="76" y="14.9" fill="#F5F0E1" width="48" height="6.4"/>
                                                    <path fill="#D66194" d="M112.7,80.3c-4.1,0-7.9,2.2-9.9,5.8c-0.6,1-1.6,1.6-2.8,1.6c-1.2,0-2.2-0.6-2.8-1.6c-2-3.6-5.8-5.8-9.9-5.8
                                                        c-6.2,0-11.3,5.1-11.3,11.3c0,3.1,1.1,6.3,2.8,9.5h8c0-1.8,1.4-3.2,3.2-3.2h20.1c1.8,0,3.2,1.4,3.2,3.2l8,0
                                                        c1.7-3.2,2.8-6.5,2.8-9.5C124,85.4,118.9,80.3,112.7,80.3z"/>
                                                    <path fill="#A2496F" d="M110.1,104.4H89.9c-1.8,0-3.2-1.4-3.2-3.2h-8c5.2,9.8,16.5,19.4,21.2,23.2c4.7-3.8,16-13.3,21.2-23.2h-8
                                                        C113.3,102.9,111.8,104.4,110.1,104.4z"/>
                                                    <path fill="#D0E7DA" d="M69.6,91.6c0-9.8,7.9-17.7,17.7-17.7c4.8,0,9.4,2,12.7,5.4c3.3-3.4,7.8-5.4,12.7-5.4
                                                        c9.8,0,17.7,7.9,17.7,17.7c0,3-0.7,6.2-2.1,9.5h7c0-1.8,1.4-3.2,3.2-3.2h39c8.9,0,16.2-7.3,16.2-16.2V43.4c0-1.6-1.3-3-3-3H9.3
                                                        c-1.6,0-3,1.3-3,3v38.4c0,8.9,7.3,16.2,16.2,16.2h39c1.8,0,3.2,1.4,3.2,3.2l7,0C70.3,97.8,69.6,94.7,69.6,91.6z"/>
                                                    <path fill="#ADC3B7" d="M6.4,107.4v74.7c0,1.6,1.3,3,3,3h181.3c1.6,0,3-1.3,3-3V97.5c-4.1,4.2-9.8,6.9-16.2,6.9h-39
                                                        c-1.8,0-3.2-1.4-3.2-3.2h-7c-2.1,4.9-5.7,10.2-10.8,15.7c-6.5,7.1-13.6,12.6-15.6,14.1c-0.6,0.4-1.2,0.6-1.9,0.6s-1.3-0.2-1.9-0.6
                                                        c-2-1.5-9.1-7-15.6-14.1c-5.1-5.6-8.7-10.8-10.8-15.7h-7c0,1.8-1.4,3.2-3.2,3.2h-39c-8.2,0-15.4-4.4-19.4-11v10.9
                                                        C5,104.2,6.4,105.7,6.4,107.4z"/>
                                                    <path fill="#422938" d="M89.9,104.4h20.1c1.8,0,3.2-1.4,3.2-3.2c0-1.8-1.4-3.2-3.2-3.2H89.9c-1.8,0-3.2,1.4-3.2,3.2
                                                        C86.7,102.9,88.2,104.4,89.9,104.4z"/>
                                                    <path fill="#422938" d="M190.7,34.1h-60.3V11.7c0-1.8-1.4-3.2-3.2-3.2H72.8c-1.8,0-3.2,1.4-3.2,3.2v22.3H9.3
                                                        c-5.1,0-9.3,4.2-9.3,9.3v38.4C0,86,1.2,90,3.2,93.3c3.9,6.6,11.2,11,19.4,11h39c1.8,0,3.2-1.4,3.2-3.2c0-1.8-1.4-3.2-3.2-3.2h-39
                                                        c-8.9,0-16.2-7.3-16.2-16.2V43.4c0-1.6,1.3-3,3-3h181.3c1.6,0,3,1.3,3,3v38.4c0,8.9-7.3,16.2-16.2,16.2h-39c-1.8,0-3.2,1.4-3.2,3.2
                                                        c0,1.8,1.4,3.2,3.2,3.2h39c6.3,0,12.1-2.6,16.2-6.9v84.6c0,1.6-1.3,3-3,3H9.3c-1.6,0-3-1.3-3-3v-74.7c0-1.8-1.4-3.2-3.2-3.2
                                                        c-1.8,0-3.2,1.4-3.2,3.2v74.7c0,5.1,4.2,9.3,9.3,9.3h181.3c5.1,0,9.3-4.2,9.3-9.3V43.4C200,38.3,195.8,34.1,190.7,34.1z M124,21.3
                                                        H76v-6.4h48V21.3z M76,27.7h48v6.4H76V27.7z"/>
                                                    <path fill="#422938" d="M112.7,73.9c-4.8,0-9.4,2-12.7,5.4c-3.3-3.4-7.8-5.4-12.7-5.4c-9.8,0-17.7,7.9-17.7,17.7
                                                        c0,3,0.7,6.2,2.1,9.5c2.1,4.9,5.7,10.2,10.8,15.7C89,124,96.1,129.4,98.1,131c0.6,0.4,1.2,0.6,1.9,0.6s1.3-0.2,1.9-0.6
                                                        c2-1.5,9.1-7,15.6-14.1c5.1-5.6,8.7-10.8,10.8-15.7c1.4-3.3,2.1-6.5,2.1-9.5C130.4,81.9,122.4,73.9,112.7,73.9z M121.2,101.2
                                                        c-5.2,9.8-16.5,19.4-21.2,23.2c-4.7-3.8-16-13.3-21.2-23.2C77.1,98,76,94.7,76,91.6c0-6.2,5.1-11.3,11.3-11.3
                                                        c4.1,0,7.9,2.2,9.9,5.8c0.6,1,1.6,1.6,2.8,1.6c1.2,0,2.2-0.6,2.8-1.6c2-3.6,5.8-5.8,9.9-5.8c6.2,0,11.3,5.1,11.3,11.3
                                                        C124,94.7,122.9,98,121.2,101.2z"/>
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="index.php?worklist=<?php echo $customer['customer_id'] ?>" class="worklistButton">
                                            <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 25 25" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
                                                <g transform="translate(0 -1028.4)">
                                                <path d="m3 1035.4v2 1 3 1 5 1c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-1-5-4-3h-18z" fill="#16a085"/>
                                                <path d="m3 1034.4v2 1 3 1 5 1c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-1-5-4-3h-18z" fill="#ecf0f1"/>
                                                <path d="m3 1033.4v2 1 3 1 5 1c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-1-5-4-3h-18z" fill="#bdc3c7"/>
                                                <path d="m3 1032.4v2 1 3 1 5 1c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-1-5-4-3h-18z" fill="#ecf0f1"/>
                                                <path d="m5 1028.4c-1.1046 0-2 0.9-2 2v1 4 2 1 3 1 5 1c0 1.1 0.8954 2 2 2h2v-1h-1.5c-0.8284 0-1.5-0.7-1.5-1.5 0-0.9 0.6716-1.5 1.5-1.5h12.5 1c1.105 0 2-0.9 2-2v-1-5-4-3-1c0-1.1-0.895-2-2-2h-4-10z" fill="#16a085"/>
                                                <path d="m8 1028.4v18h1 9 1c1.105 0 2-0.9 2-2v-1-5-4-3-1c0-1.1-0.895-2-2-2h-4-6-1z" fill="#1abc9c"/>
                                                <path d="m7 1048.4v2 2l2.5-2 2.5 2v-2-2h-5z" fill="#e74c3c"/>
                                                <rect height="1" width="5" y="1047.4" x="7" fill="#c0392b"/>
                                                </g>
                                            </svg>
                                        </a>
                                            
                                        <a href="index.php?customerReport=<?php echo $customer['customer_id'] ?>&customer=<?php echo $customer['customer_name'] ?>" class="customerReportButton">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 128 128">
                                                <defs><style>.cls-1{fill:#2d3e50;}.cls-2{fill:#2e79bd;}</style></defs>
                                                <title>b</title>
                                                <path class="cls-1" d="M28.628,72.11907A17.97418,17.97418,0,0,1,6.59139,80.13388v38.54969a2.49475,2.49475,0,0,0,2.49111,2.49111H26.35031a2.49477,2.49477,0,0,0,2.49109-2.49111v-46.51A.11355.11355,0,0,0,28.628,72.11907Z"/>
                                                <path class="cls-1" d="M46.2281,42.16451,37.447,51.07585v67.60772a2.49475,2.49475,0,0,0,2.49111,2.49111H57.20588a2.49477,2.49477,0,0,0,2.49111-2.49111v-72.822L55.99432,42.156A18.13389,18.13389,0,0,1,46.2281,42.16451Z"/>
                                                <path class="cls-1" d="M68.30258,67.084v51.59962a2.49474,2.49474,0,0,0,2.49109,2.49111H88.06148a2.49477,2.49477,0,0,0,2.49111-2.49111V68.02379a17.94923,17.94923,0,0,1-22.25-.93984Z"/>
                                                <path class="cls-1" d="M110.14729,35.7358,99.15817,46.72493v71.95864a2.49474,2.49474,0,0,0,2.49109,2.49111h17.26781a2.49477,2.49477,0,0,0,2.49111-2.49111v-83.429a17.95629,17.95629,0,0,1-11.26088.48124Z"/>
                                                <path class="cls-2" d="M115.045,6.82533a11.60217,11.60217,0,0,0-9.725,17.94326l-18.96395,18.964a11.5781,11.5781,0,0,0-12.86295.13029L60.81946,31.18721a11.61122,11.61122,0,1,0-19.45139-.00064L19.28566,53.59035A11.62772,11.62772,0,1,0,22.67974,56.984l22.082-22.40314a11.572,11.572,0,0,0,12.6643,0L70.16978,47.32633a11.61164,11.61164,0,1,0,19.58-.1997l18.9646-18.9646A11.60839,11.60839,0,1,0,115.045,6.82533Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    
                                </td>
                                <?php if(isset($customer['customer_remaining_minutes'])): ?>
                                    <td><?php echo round($customer['customer_remaining_minutes']/60, 2) ?></td>
                                <?php else: ?>
                                    <td>-</td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- BUTTONS -->
            <div class="row mt-4">
                <div class="col-4 text-center">
                    <button id="newCustomerButton" class="btn btn-sm btn-outline-success" >Add New Customer</button>
                </div>
                <div class="col-4 text-center">
                    <form action="index.php" method="GET">
                        <button type="submit" id="newCustomerButton" class="btn btn-sm btn-outline-dark" >
                            HomePage
                        </button>
                    </form>
                </div>
                <div class="col-4 text-center">
                    <form action="index.php" method="GET">
                        <button type="submit" class="btn btn-sm btn-outline-success" value="true" name="allCustomersReport">All Customer Report</button>
                    </form>
                </div>
            </div>
            
        </div>

        <!-- ADD NEW CUSTOMER FORM -->
        <div id="addNewCustomerDiv" class="d-none">
            <div class="row d-flex mt-4">
                <div class="col-8 offset-2 col-md-6 offset-md-3 d-flex justify-content-around mx-auto mt-4">
                    <form action="process.php" method="POST" class="w-100 mt-5" id="addNewCustomerForm">
                        <fieldset class="border border-primary">
                            <legend class="ml-5 w-auto">Group Name</legend>

                            <div class="form-group row p-3 text-center p-lg-1 m-0">
                                <div class="col-12 col-lg-4 col-xl-5 d-flex justify-content-center align-items-center">
                                    <label for="name" class="mr-2">Customer Name</label>
                                </div>
                                <div class="col-12 col-lg-8 col-xl-7 d-flex align-items-center">
                                    <input type="text" id="name" name="name" required class="form-control">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center align-items-center my-3">
                                <button type="submit" class="btn btn-sm btn-outline-success" name="saveNewCustomer">Add New Customer</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        
        <?php if(isset($_GET['addWork'])): ?>
            <!-- ADD WORK FORM -->
            <div id="addWorkForm">
                <div class="row d-flex mt-4">
                    <div class="col-8 offset-2 col-lg-6 offset-lg-3">
                        <form action="process.php" method="POST" class="w-100 mt-5">
                            <fieldset class="border border-primary">
                                <legend class="ml-5 w-auto">Add Work</legend>

                                <div class="text-center">
                                    <div class="form-group m-0">
                                        <label for="work_date" class="mr-2">Date</label>
                                        <input type="date" class="rounded text-center" id="work_date" name="work_date" placeholder="2020-20-02" required>
                                    </div>

                                    <div class="form-group row py-3 text-center m-0">
                                        <div class="col-12 col-md-9 pr-md-0 col-lg-8 ">
                                            <label for="work_minutes" class="mr-2">Worked Time in Minutes</label>
                                        </div>
                                        <div class="col-12 col-md-3 pl-md-0 col-lg-4">
                                            <input type="number" class="rounded w-100 text-center" id="work_minutes" class="w-75" name="work_minutes" placeholder="60" required>
                                        </div>
                                    </div>

                                    <select name="worklistID" class="rounded" required>
                                        <?php foreach ($worklists as $key => $worklist): ?>
                                            <?php if($worklist['worklist_active'] == 1): ?>
                                                <option value="<?php echo $worklist['worklist_id'] ?>"><?php echo $worklist['worklist_name'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="d-flex justify-content-center align-items-center my-3">
                                    <button type="submit" class="btn btn-sm btn-outline-success" name="saveNewWork">Add Work</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?> 
        
        <?php if(isset($_GET['worklist'])): ?>
            <!-- TABLE OF WORKLIST-->
            <?php
                $totals_hours = 0; 
                $totals_worked = 0; 
                $totals_available = 0;

                $totals_active_hours = 0; 
                $totals_active_worked = 0; 
                $totals_active_available = 0;
            ?>

            <div class="w-auto d-flex flex-column justify-content-center my-5">
                <div class="d-flex justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-sm table-dark table-striped table-borderless table-hover text-center rounded">
                            <thead>
                                <th>Worklist ID</th>
                                <th>Worklist Name</th>
                                <th>Total Hours</th>
                                <th>Worked Hours</th>
                                <th>Available Hours</th>
                                <th>Active (Y/N)</th>
                            </thead>
                            <tbody>
                                <?php foreach ($worklists as $key => $worklist): ?>
                                    <tr>
                                        <td><?php echo $worklist['worklist_id'] ?></td>
                                        <td><?php echo $worklist['worklist_name'] ?></td>
                                        <td><?php echo round($worklist['worklist_total_minutes']/60, 2) ?></td>
                                        <?php if(isset($worklist['worklist_worked_minutes'])): ?>
                                            <td><?php echo round($worklist['worklist_worked_minutes']/60, 2) ?></td>
                                            <td><?php echo round($worklist['worklist_remaining_minutes']/60, 2) ?></td>
                                            <?php else:?>
                                            <td colspan="2" class="text-warming">Add Work</td>
                                        <?php endif;?>

                                        <?php
                                            $totals_hours += $worklist['worklist_total_minutes']; 
                                            $totals_worked += $worklist['worklist_worked_minutes']; 
                                            $totals_available += $worklist['worklist_remaining_minutes'];
                                            
                                            if($worklist['worklist_active'] == 1){
                                                $totals_active_hours += $worklist['worklist_total_minutes']; 
                                                $totals_active_worked += $worklist['worklist_worked_minutes']; 
                                                $totals_active_available += $worklist['worklist_remaining_minutes'];
                                            }
                                        ?>

                                        <td>
                                            <form action="process.php" method="POST" class="changeActiveStatusFrom">
                                                <input type="hidden" value="<?php echo $worklist['worklist_name'] ?>" name="worklist_name">
                                                <input type="hidden" value="<?php echo $customer_id ?>" name="customer_id">
                                                
                                                <button type="submit" class="btn" name="changeActiveStatus">
                                                    <?php if($worklist['worklist_active'] == 1): ?>
                                                        <input type="hidden" value="0" name="activeNewStatus">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <?php else:?>
                                                            <input type="hidden" value="1" name="activeNewStatus">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                    <?php endif; ?>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                <tr>
                                    <td colspan="2">TOTALS</td>
                                    <td><?php echo round($totals_hours/60, 2); ?></td>
                                    <td><?php echo round($totals_worked/60, 2); ?></td>
                                    <td><?php echo round($totals_available/60, 2); ?></td>
                                    <td>ALL</td>
                                </tr>
                                <tr>
                                    <td colspan="2">TOTALS ACTIVE</td>
                                    <td><?php echo round($totals_active_hours/60, 2); ?></td>
                                    <td><?php echo round($totals_active_worked/60, 2); ?></td>
                                    <td><?php echo round($totals_active_available/60, 2); ?></td>
                                    <td>ACTIVE</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 

                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-sm btn-outline-success" id="addWorkButton">Add To Worklist</button>
                </div>

                <!-- ADD TO WORKLIST FORM -->
                <div class="d-none" id="addWorkDiv">
                    <div class="d-flex justify-content-center mt-4">
                        <form action="process.php" method="POST">
                            <fieldset class="border border-primary px-3">
                                <legend class="ml-5 w-auto">New Work</legend>

                                <input type="hidden" name="customer_id" value="<?php echo $_GET['worklist'] ?>">

                                <div class="form-group">
                                    <label for="worklist_name">Work Name</label>
                                    <input type="text" class="rounded" id="worklist_name" name="worklist_name" required>
                                </div>

                                <div class="form-group">
                                    <label for="worklist_total_minutes">Total Hours</label>
                                    <input type="number" class="rounded" id="worklist_total_minutes" name="worklist_total_minutes" required>
                                </div>

                                <div class="form-group">
                                    <label for="worklist_active">Active</label>
                                        <input type="hidden" value="1" name="worklist_active" >
                                        <label class="switch">
                                            <input type="checkbox" checked id="addWorklistFormActiveStatus">
                                            <span class="slider round"></span>
                                        </label>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-sm btn-outline-success" id="addWorkButton" name="saveNewToWorklist">Add Work</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>  
        
        <?php if(isset($_GET['customerReport'])): ?>
            <!-- CUSTOMER REPORT -->
            <?php
                $customer_id = $_GET['customerReport'];
                $customer_name = $_GET['customer'];
                $total_worked_hours = 0;
            ?>

                <?php 
                    if(isset($_GET['date_from']) && $_GET['date_from'] !== ""){
                        $date_from = $_GET['date_from'];
                    } else if(!isset($_GET['date_from'])){
                        $currentMonth = date('m');
                        $currentYear = date('Y');
                        $date_from = "$currentYear-$currentMonth-01";
                    } else {
                        $date_from = "0000-00-00";
                    }

                    if(isset($_GET['date_to']) && $_GET['date_to'] !== "" ){
                        $date_to = $_GET['date_to'];
                    } else {
                        $date_to = date('Y-m-d');
                    }

                    if(isset($_GET['worklist_name']) && $_GET['worklist_name'] !== ""){
                        $worklist_name = $_GET['worklist_name'];
                    } else {
                        $worklist_name = 'All works';
                    }
                ?>

                <div class="row mt-4">
                    <div class="col-12 col-md-3 col-xl-2 d-flex justify-content-center align-items-center">
                        <h4 class="m-0"><?php echo $customer_name ?></h4>
                    </div>
                    <div class="col-12 col-md-9 col-xl-10">
                        <form action="index.php" method="GET" class="filteringForm">
                            <div class="row">
                                <input type="hidden" value="<?php echo $customer_id?>" name="customerReport">
                                <input type="hidden" value="<?php echo $customer_name?>" name="customer">
                                <div class="col-6 col-md-6 col-xl-3 d-flex mt-2">
                                    <input type="date" class="rounded" value="<?php echo $date_from ?>" name="date_from">
                                </div>
                                <div class="col-6 col-md-6 col-xl-3 d-flex mt-2">
                                    <input type="date" class="rounded" value="<?php echo $date_to ?>" name="date_to">
                                </div>
                                <div class="col-8 col-xl-4 d-flex mt-2">
                                    <select name="worklist_name" class="w-100 rounded">
                                        <option value="<?php echo 'All works' ?>">All works</option>
                                        <?php foreach ($works as $key => $work): ?>
                                            <?php if($work['worklist_active'] == 1): ?>
                                                <option value="<?php echo $work['worklist_name'] ?>">
                                                    <?php echo $work['worklist_name'] ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-4 col-xl-2 d-flex mt-2">
                                    <button type="submit" class="btn p-0">
                                        <svg viewBox="0 -26 512 512" xmlns="http://www.w3.org/2000/svg" height="40" width="40">
                                            <path d="m56 70 160 200v180l6.878906-1.148438c16.492188-2.75 31.660156-9.703124 44.269532-19.839843 12.613281-10.152344 22.640624-23.492188 28.851562-39.011719v-120l160-200zm0 0" fill="#e87288"/>
                                            <path d="m502 10v20c0 22.089844-17.910156 40-40 40-51.355469 0-350.152344 0-416.171875 0-19.789063 0-35.828125-16.039062-35.828125-35.828125v-24.171875zm0 0" fill="#fafaff"/>
                                            <path d="m376 120c5.519531 0 10-4.480469 10-10s-4.480469-10-10-10-10 4.480469-10 10 4.480469 10 10 10zm0 0"/>
                                            <path d="m502 0h-492c-5.523438 0-10 4.476562-10 10v24.171875c0 25.269531 20.558594 45.828125 45.828125 45.828125h5.367187l154.804688 193.507812v176.492188c0 6.1875 5.5625 10.882812 11.648438 9.863281l6.875-1.148437c17.867187-2.980469 34.773437-10.558594 48.898437-21.914063 20.832031-16.769531 32.578125-40.902343 32.578125-46.800781v-116.492188l154.804688-193.507812h1.195312c27.570312 0 50-22.429688 50-50v-20c0-5.523438-4.476562-10-10-10zm-241.117188 421.21875c-10.1875 8.191406-22.160156 13.957031-34.882812 16.832031v-158.050781h60v108.019531c-5.507812 12.933594-14.164062 24.382813-25.117188 33.199219zm30.308594-161.21875h-70.386718l-144-180h358.386718zm200.808594-230c0 16.542969-13.457031 30-30 30h-416.171875c-14.242187 0-25.828125-11.585938-25.828125-25.828125v-14.171875h472zm0 0"/>
                                            <path d="m270.519531 237.808594c4.304688 3.441406 10.597657 2.761718 14.058594-1.5625l72.339844-90.410156c3.449219-4.3125 2.753906-10.605469-1.558594-14.054688s-10.605469-2.753906-14.058594 1.558594l-72.339843 90.410156c-3.449219 4.3125-2.75 10.605469 1.558593 14.058594zm0 0"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-auto d-flex flex-column justify-content-center my-3">
                    <div class="d-flex justify-content-center">
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-striped table-borderless table-hover text-center rounded">
                                <thead>
                                    <th>Work Name</th>
                                    <th>Date</th>
                                    <th>Worked Hours</th>
                                    <th>Actions</th>
                                </thead>

                                <tbody>
                                    <?php foreach ($works as $key => $work): ?>
                                        <?php if($work['worklist_active'] == 1): ?>
                                            <?php if(isset($worklist_name) && $worklist_name !== 'All works'): ?>
                                                <?php if($work['worklist_name'] == $worklist_name): ?>
                                                    <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="2">Total Worked Hours</td>
                                        <td colspan="2"><?php echo round($total_worked_hours/60, 2).' hours'; ?></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div> 
                </div>
            
        <?php endif;?>

        <?php if(isset($_GET['allCustomersReport'])): ?>
            <!-- ALL CUSTOMER REPORT -->
            <?php
                $total_worked_hours = 0;

                $stmt = $mysqli->prepare("SELECT * FROM customers");
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()) {
                    $customers[] = $row;
                }
                if(!$customers) exit('No rows');

                if(isset($_GET['date_from']) && $_GET['date_from'] !== ""){
                    $date_from = $_GET['date_from'];
                } else if(!isset($_GET['date_from'])){
                    $currentMonth = date('m');
                    $currentYear = date('Y');
                    $date_from = "$currentYear-$currentMonth-01";
                } else {
                    $date_from = "0000-00-00";
                }

                if(isset($_GET['date_to']) && $_GET['date_to'] !== "" ){
                    $date_to = $_GET['date_to'];
                } else {
                    $date_to = date('Y-m-d');
                }

                if(isset($_GET['customer_name']) && $_GET['customer_name'] !== ''){
                    $customer_name = $_GET['customer_name'];
                } else {
                    $customer_name = 'All Customers';
                }

                if(isset($_GET['worklist_name'])){
                    $worklist_name = $_GET['worklist_name'];
                } else {
                    $worklist_name = 'All works';
                }
            ?>

                <div class="row mt-4">
                    <div class="col-10 d-md-flex">
                        <div class="col-12 col-md-3 p-md-0 col-xl-2 d-flex justify-content-center align-items-center">
                            <h4 class="m-0"><?php echo $customer_name ?></h4>
                        </div>
                        <div class="col-12 col-md-9 p-md-0 col-xl-10">
                            <form action="index.php" method="GET" id="filteringAllCustomersForm">
                                <div class="row ml-3">
                                    <input type="hidden" value="true" name="allCustomersReport">
                                    <div class="col-6 col-md-6 col-xl-4 d-flex mt-2">
                                        <input type="date" class="rounded" value="<?php echo $date_from ?>" name="date_from">
                                    </div>
                                    <div class="col-6 col-md-6 col-xl-4 d-flex mt-2">
                                        <input type="date" class="rounded" value="<?php echo $date_to ?>" name="date_to">
                                    </div>
                                    <div class="col-10 col-xl-3 d-flex mt-2">
                                        <select name="worklist_name" class="w-100 rounded">
                                            <option value="<?php echo 'All works' ?>">All works</option>
                                            <?php foreach ($works as $key => $work): ?>
                                                <?php if($work['worklist_active'] == 1): ?>
                                                    <?php if(isset($customer_name) && $customer_name == 'All Customers'): ?>
                                                        <option value="<?php echo $work['worklist_name'] ?>">
                                                            <?php echo $work['worklist_name'] ?>
                                                        </option>
                                                        <?php else: ?>
                                                        <?php if(isset($customer_name) && $customer_name == $work['customer_name']): ?>
                                                            <option value="<?php echo $work['worklist_name'] ?>">
                                                                <?php echo $work['worklist_name'] ?>
                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <input type="hidden" value="" name="customer_name">
                                    <div class="col-2 col-xl-1 d-flex mt-2">
                                        <button type="submit" class="btn p-0">
                                            <svg viewBox="0 -26 512 512" xmlns="http://www.w3.org/2000/svg" height="40" width="40">
                                                <path d="m56 70 160 200v180l6.878906-1.148438c16.492188-2.75 31.660156-9.703124 44.269532-19.839843 12.613281-10.152344 22.640624-23.492188 28.851562-39.011719v-120l160-200zm0 0" fill="#e87288"/>
                                                <path d="m502 10v20c0 22.089844-17.910156 40-40 40-51.355469 0-350.152344 0-416.171875 0-19.789063 0-35.828125-16.039062-35.828125-35.828125v-24.171875zm0 0" fill="#fafaff"/>
                                                <path d="m376 120c5.519531 0 10-4.480469 10-10s-4.480469-10-10-10-10 4.480469-10 10 4.480469 10 10 10zm0 0"/>
                                                <path d="m502 0h-492c-5.523438 0-10 4.476562-10 10v24.171875c0 25.269531 20.558594 45.828125 45.828125 45.828125h5.367187l154.804688 193.507812v176.492188c0 6.1875 5.5625 10.882812 11.648438 9.863281l6.875-1.148437c17.867187-2.980469 34.773437-10.558594 48.898437-21.914063 20.832031-16.769531 32.578125-40.902343 32.578125-46.800781v-116.492188l154.804688-193.507812h1.195312c27.570312 0 50-22.429688 50-50v-20c0-5.523438-4.476562-10-10-10zm-241.117188 421.21875c-10.1875 8.191406-22.160156 13.957031-34.882812 16.832031v-158.050781h60v108.019531c-5.507812 12.933594-14.164062 24.382813-25.117188 33.199219zm30.308594-161.21875h-70.386718l-144-180h358.386718zm200.808594-230c0 16.542969-13.457031 30-30 30h-416.171875c-14.242187 0-25.828125-11.585938-25.828125-25.828125v-14.171875h472zm0 0"/>
                                                <path d="m270.519531 237.808594c4.304688 3.441406 10.597657 2.761718 14.058594-1.5625l72.339844-90.410156c3.449219-4.3125 2.753906-10.605469-1.558594-14.054688s-10.605469-2.753906-14.058594 1.558594l-72.339843 90.410156c-3.449219 4.3125-2.75 10.605469 1.558593 14.058594zm0 0"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-10 p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-striped table-borderless table-hover text-center rounded">
                                <thead>
                                    <th>Customer Name</th>
                                    <th>Work Name</th>
                                    <th>Date</th>
                                    <th>Worked Hours</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($works as $key => $work): ?>
                                        <?php if($work['worklist_active'] == 1): ?>
                                            <?php if($customer_name == 'All Customers'): ?>
                                                <?php if(isset($worklist_name) && $worklist_name == 'All works'): ?>
                                                        <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                                <?php else: ?>
                                                    <?php if($work['worklist_name'] == $worklist_name): ?>
                                                        <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($work['customer_name'] == $customer_name): ?>
                                                    <?php if(isset($worklist_name) && $worklist_name == 'All works'): ?>
                                                        <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                                    <?php else: ?>
                                                        <?php if($work['worklist_name'] == $worklist_name): ?>
                                                            <?php printTableData($work, $worklist_name, $date_from, $date_to, $total_worked_hours); ?> 
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="2">Total Worked Hours</td>
                                        <td colspan="3"><?php echo round($total_worked_hours/60, 2).' hours'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-2 px-1 m-0">
                        <select name="customer_name" class="w-100 rounded" id="customer_nameFilter">
                            <option value="<?php echo 'All Customers' ?>">
                                All Customers
                            </option>
                            <?php foreach ($customers as $key => $customer): ?>
                                <option value="<?php echo $customer['customer_name'] ?>">
                                    <?php echo $customer['customer_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div> 
                </div>
                
        <?php endif;?>
    </div>
    <!-- My JS -->
    <script type="text/javascript" src="./public/js/main.js"></script>
</body>
</html>

<?php 
    function printTableData($work, $worklist_name, $date_from, $date_to, &$total_worked_hours){ ?>
        <?php if( $date_from <= $work['work_date']): ?>
            <?php if( $date_to >= $work['work_date']): ?>
                <?php
                    $total_worked_hours += $work['work_minutes'];
                ?>
                <tr>
                    <?php if(isset($work['customer_name'])):?>
                        <td><?php echo $work['customer_name'] ?></td>
                    <?php endif; ?>
                    <td><?php echo $work['worklist_name'] ?></td>
                    <td><?php echo $work['work_date'] ?></td>
                    <td><?php echo round($work['work_minutes']/60, 2) ?></td>
                    <form action="process.php" method="POST" class="deleteWorkForm">
                        <input type="hidden" name="work_id" value="<?php echo $work['work_id'] ?>">
                        <td>
                            <button type="submit" class="btn p-0" name="deleteWork">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="32" width="32" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:url(#SVGID_1_);}
                                        .st1{fill:url(#SVGID_2_);}
                                        .st2{fill:url(#SVGID_3_);}
                                        .st3{fill:url(#SVGID_4_);}
                                        .st4{fill:url(#SVGID_5_);}
                                        .st5{fill:url(#SVGID_6_);}
                                        .st6{fill:url(#SVGID_7_);}
                                        .st7{fill:url(#SVGID_8_);}
                                        .st8{fill:url(#SVGID_9_);}
                                        .st9{fill:url(#SVGID_10_);}
                                        .st10{fill:url(#SVGID_11_);}
                                        .st11{fill:url(#SVGID_12_);}
                                        .st12{fill:url(#SVGID_13_);}
                                        .st13{fill:url(#SVGID_14_);}
                                        .st14{fill:url(#SVGID_15_);}
                                        .st15{fill:url(#SVGID_16_);}
                                        .st16{fill:url(#SVGID_17_);}
                                        .st17{fill:url(#SVGID_18_);}
                                        .st18{fill:url(#SVGID_19_);}
                                        .st19{fill:url(#SVGID_20_);}
                                    </style>
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2.2004" y1="12.7327" x2="20.5835" y2="12.7327">
                                        <stop  offset="0" style="stop-color:#1245C6"/>
                                        <stop  offset="1" style="stop-color:#9909B7"/>
                                    </linearGradient>
                                    <path class="st0" d="M20.5,6.2C20.4,6.1,20.3,6,20.2,6h-4l-0.9-2.2c-0.1-0.3-0.4-0.6-0.7-0.8c-0.3-0.2-0.7-0.3-1-0.3H9.3
                                    C9,2.7,8.6,2.8,8.3,3C7.9,3.3,7.7,3.5,7.6,3.9L6.7,6h-4c-0.1,0-0.2,0-0.3,0.1C2.2,6.2,2.2,6.3,2.2,6.5v0.8c0,0.1,0,0.2,0.1,0.3
                                    c0.1,0.1,0.2,0.1,0.3,0.1h1.3v12.4c0,0.7,0.2,1.3,0.6,1.8c0.4,0.5,0.9,0.8,1.5,0.8h10.9c0.6,0,1.1-0.3,1.5-0.8
                                    c0.4-0.5,0.6-1.2,0.6-1.9V7.7h1.3c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.2,0.1-0.3V6.5C20.6,6.3,20.5,6.2,20.5,6.2z M9.1,4.5
                                    c0.1-0.1,0.1-0.1,0.2-0.1h4.1c0.1,0,0.2,0.1,0.2,0.1L14.3,6H8.5L9.1,4.5z M17.2,20.1c0,0.2,0,0.4-0.1,0.5C17.1,20.8,17,20.9,17,21
                                    c-0.1,0.1-0.1,0.1-0.1,0.1H6c0,0-0.1,0-0.1-0.1c-0.1-0.1-0.1-0.2-0.2-0.4c-0.1-0.2-0.1-0.3-0.1-0.5V7.7h11.7L17.2,20.1L17.2,20.1z
                                    M7.6,18.6h0.8c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.2,0.1-0.3v-7.5c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1H7.6
                                    c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3v7.5c0,0.1,0,0.2,0.1,0.3C7.4,18.5,7.5,18.6,7.6,18.6z M11,18.6h0.8
                                    c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.2,0.1-0.3v-7.5c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1H11c-0.1,0-0.2,0-0.3,0.1
                                    c-0.1,0.1-0.1,0.2-0.1,0.3v7.5c0,0.1,0,0.2,0.1,0.3C10.8,18.5,10.9,18.6,11,18.6z M14.3,18.6h0.8c0.1,0,0.2,0,0.3-0.1
                                    c0.1-0.1,0.1-0.2,0.1-0.3v-7.5c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.1h-0.8c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.1,0.2-0.1,0.3
                                    v7.5c0,0.1,0,0.2,0.1,0.3C14.1,18.5,14.2,18.6,14.3,18.6z"/>
                                </svg>
                            </button>
                        </td>
                    </form>
                </tr>
            <?php endif; ?>
        <?php endif; ?>
        <?php return $total_worked_hours; ?>
<?php } ?>