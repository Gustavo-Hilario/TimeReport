<?php
    include_once 'includes/dbh.inc.php';
    require 'process.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="./public/stylesheets/main.css">

    
    <title>Time Report HomePage</title>
</head>
<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <!-- TABLE -->
        <div class="w-100 d-flex justify-content-center">
            <?php
                $sql = "SELECT * FROM customers;";
                $sqlCustomerResult = mysqli_query($mysqli, $sql);
                $sqlCustomerResultCheck = mysqli_num_rows($sqlCustomerResult);
            ?>
            <table class="text-center border bg-dark text-white">
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Actions</th>
                    <th>Hour Total</th>
                </tr>

                <?php
                    while ($customer = mysqli_fetch_assoc($sqlCustomerResult)): ?>
                    <tr>
                        <td><?php echo $customer['customer_id'] ?></td>
                        <td><?php echo $customer['customer_name'] ?></td>
                        <td>
                            <a href="index.php?addWork=<?php echo $customer['customer_id'] ?>" class="addWorkButton">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24" width="24" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
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

                            <a href="index.php?worklist=<?php echo $customer['customer_id'] ?>" class="worklist">
                                <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="24" width="24" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
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
                                
                            <a class="customerReport">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 128 128">
                                    <defs><style>.cls-1{fill:#2d3e50;}.cls-2{fill:#2e79bd;}</style></defs>
                                    <title>b</title>
                                    <path class="cls-1" d="M28.628,72.11907A17.97418,17.97418,0,0,1,6.59139,80.13388v38.54969a2.49475,2.49475,0,0,0,2.49111,2.49111H26.35031a2.49477,2.49477,0,0,0,2.49109-2.49111v-46.51A.11355.11355,0,0,0,28.628,72.11907Z"/>
                                    <path class="cls-1" d="M46.2281,42.16451,37.447,51.07585v67.60772a2.49475,2.49475,0,0,0,2.49111,2.49111H57.20588a2.49477,2.49477,0,0,0,2.49111-2.49111v-72.822L55.99432,42.156A18.13389,18.13389,0,0,1,46.2281,42.16451Z"/>
                                    <path class="cls-1" d="M68.30258,67.084v51.59962a2.49474,2.49474,0,0,0,2.49109,2.49111H88.06148a2.49477,2.49477,0,0,0,2.49111-2.49111V68.02379a17.94923,17.94923,0,0,1-22.25-.93984Z"/>
                                    <path class="cls-1" d="M110.14729,35.7358,99.15817,46.72493v71.95864a2.49474,2.49474,0,0,0,2.49109,2.49111h17.26781a2.49477,2.49477,0,0,0,2.49111-2.49111v-83.429a17.95629,17.95629,0,0,1-11.26088.48124Z"/>
                                    <path class="cls-2" d="M115.045,6.82533a11.60217,11.60217,0,0,0-9.725,17.94326l-18.96395,18.964a11.5781,11.5781,0,0,0-12.86295.13029L60.81946,31.18721a11.61122,11.61122,0,1,0-19.45139-.00064L19.28566,53.59035A11.62772,11.62772,0,1,0,22.67974,56.984l22.082-22.40314a11.572,11.572,0,0,0,12.6643,0L70.16978,47.32633a11.61164,11.61164,0,1,0,19.58-.1997l18.9646-18.9646A11.60839,11.60839,0,1,0,115.045,6.82533Z"/>
                                </svg>
                            </a>
                        </td>
                        <td>Hour Total</td>
                    </tr>
                <?php endwhile; ?>
                    
            </table>
        </div>

        <!-- BUTTONS -->
        <div class="w-50 d-flex justify-content-around mx-auto mt-4">
            <button id="newCustomerButton" class="btn btn-sm btn-outline-success" >Add New Customer</button>
            <button class="btn btn-sm btn-outline-success">All Customer Report</button>
        </div>

        <!-- ADD NEW CUSTOMER FORM -->
        <div id="addNewCustomerDiv" class="">
           
            <div class="w-50 d-flex justify-content-around mx-auto mt-4">
                <form action="process.php" method="POST" class="w-100 mt-5" id="addNewCustomerForm">
                    <fieldset class="border border-primary">
                        <legend class="ml-5 w-auto">Group Name</legend>

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="name" class="mr-2">Customer Name</label>
                            <input type="text" id="name" name="name"><br><br>
                        </div>
                        
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <button type="submit" class="btn btn-sm btn-outline-success" name="saveNewCustomer">Add New Customer</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- ADD WORK FORM -->
        <div id="addWorkForm" class="">
            <?php
                if(isset($_GET['addWork'])){
                    $customer_id = $_GET['addWork'];
                    $sql = "SELECT * FROM worklist WHERE customer_id=$customer_id;";
                    $sqlResult = mysqli_query($mysqli, $sql);
                }
            ?>
            <div class="w-50 d-flex justify-content-around mx-auto mt-4">
                <form action="process.php" method="POST" class="w-100 mt-5">
                    <fieldset class="border border-primary">
                        <legend class="ml-5 w-auto">Add Work</legend>

                        <div class="text-center">
                            <label for="work_date" class="mr-2">Date</label>
                            <input type="text" id="work_date" name="work_date" placeholder="2020-20-02">
                            <label for="work_minutes" class="mr-2">Worked Time in Minutes</label>
                            <input type="number" id="work_minutes" name="work_minutes" placeholder="60">
                        </div>
                        
                        <select name="worklistID" required>
                            <?php while ($worklist = mysqli_fetch_assoc($sqlResult)): ?>
                                <option value="<?php echo $worklist['worklist_id'] ?>"><?php echo $worklist['worklist_name'] ?></option>
                            <?php endwhile; ?>
                        </select>
                        
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <button type="submit" class="btn btn-sm btn-outline-success" name="saveNewWork">Add Work</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- TABLE OF WORKS-->
        <div class="container mt-5 d-none">
            <div class="w-100 d-flex justify-content-center">
                <table class="text-center border bg-dark text-white">
                    <tr>
                        <th>Work ID</th>
                        <th>Worklist ID</th>
                        <th>Work Date</th>
                        <th>Work Minutes</th>
                    </tr>

                    <?php foreach ($works as $key => $work): ?>
                        <tr>
                            <td><?php echo $work['work_id'] ?></td>
                            <td><?php echo $work['worklist_id'] ?></td>
                            <td><?php echo $work['work_date'] ?></td>
                            <td><?php echo $work['work_minutes'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                        
                </table>
            </div>
        </div>

    <!-- TABLE OF WORKLIST-->
    <div class="container mt-5">
        <?php
            if(isset($_GET['addWork'])){
                $customer_id = $_GET['addWork'];
                $sql = "SELECT * FROM worklist WHERE customer_id=$customer_id;";
                $sqlResult = mysqli_query($mysqli, $sql);
            }
        ?>
        <?php
            if(isset($_GET['worklist'])){
                $customer_id = $_GET['worklist'];
                $sql = "SELECT * FROM worklist WHERE customer_id=$customer_id;";
                $sqlResult = mysqli_query($mysqli, $sql);
            }
        ?>
        <div class="w-100 d-flex justify-content-center">
            <table class="text-center border bg-dark text-white">
                <tr>
                    <th>Worklist ID</th>
                    <th>Worklist Name</th>
                    <th>Customer ID</th>
                    <th>WorkList Total Minutes</th>
                    <th>Worklist Active</th>
                </tr>

                    <?php while ($worklist = mysqli_fetch_assoc($sqlResult)): ?>
                        <tr>
                            <td><?php echo $worklist['worklist_id'] ?></td>
                            <td><?php echo $worklist['worklist_name'] ?></td>
                            <td><?php echo $worklist['customer_id'] ?></td>
                            <td><?php echo $worklist['worklist_total_minutes'] ?></td>
                            <td><?php echo $worklist['worklist_active'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                    
            </table>
        </div>
    </div>    
    
    <!-- My JS -->
    <script type="text/javascript" src="./public/js/main.js"></script>
</body>
</html>