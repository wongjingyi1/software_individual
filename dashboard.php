<?php
include "reusable_components/user_session.php"
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student - Dashboard</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/f9f6f2f33c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .fa-eye:hover {
            color: red;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "nvgtop.php" ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->
        <?php 
            $pending_status=0;
            $kiv_status=0;
            $active_status=0;
            $closed_status=0;
            
            include 'config/database.php';
            try {
                $query = "SELECT status from complaint WHERE userID = :userID";
                $stmt = $con->prepare($query);
                $stmt->bindParam(":userID", $_SESSION['user_id']);
                $stmt->execute();
                $num = $stmt->rowCount();

                if ($num > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        if ($status=="pending") {
                            $pending_status+=1;
                        }
                        else if ($status=='kiv') {
                            $kiv_status+=1;
                        }
                        else if ($status=='active') {
                            $active_status+=1;
                        }
                        else if ($status=='closed') {
                            $closed_status+=1;
                        }
                    }
                }
                
            }
            // show error
            catch (PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
            
            //change here for display
            if ($role=='helpdesk' || $role=='admin' || $helpdesk==true) {
                $overall_pending_status=0;
                $overall_kiv_status=0;
                $overall_active_status=0;
                $overall_closed_status=0;
            
                include 'config/database.php';
                try {
                    $query = "SELECT status from complaint";
                    $stmt = $con->prepare($query);
                    $stmt->execute();
                    $num = $stmt->rowCount();

                    if ($num > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                            if ($status=="pending") {
                                $overall_pending_status+=1;
                            }
                            else if ($status=='kiv') {
                                $overall_kiv_status+=1;
                            }
                            else if ($status=='active') {
                                $overall_active_status+=1;
                            }
                            else if ($status=='closed') {
                                $overall_closed_status+=1;
                            }
                        }
                    }
                    
                }
                // show error
                catch (PDOException $exception) {
                    die('ERROR: ' . $exception->getMessage());
                }
            }

            if ($role=='executive') {
                $executive_pending_status=0;
                $executive_kiv_status=0;
                $executive_active_status=0;
                $executive_closed_status=0;
            
                include 'config/database.php';
                try {
                    $query = "SELECT status from complaint WHERE departmentID=:departmentID";
                    $stmt = $con->prepare($query);
                    $stmt->bindParam(":departmentID",$department_ID);
                    $stmt->execute();
                    $num = $stmt->rowCount();

                    if ($num > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                            if ($status=="pending") {
                                $executive_pending_status+=1;
                            }
                            else if ($status=='kiv') {
                                $executive_kiv_status+=1;
                            }
                            else if ($status=='active') {
                                $executive_active_status+=1;
                            }
                            else if ($status=='closed') {
                                $executive_closed_status+=1;
                            }
                        }
                    }
                    
                }
                // show error
                catch (PDOException $exception) {
                    die('ERROR: ' . $exception->getMessage());
                }
            }
        
        ?>
        <section class="container section">
            <div class="text-decoration-underline py-4">Overview</div>
            <div class="d-flex justify-content-evenly align-items-between pb-md-0 pb-3 row">
                <div class="card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center" style="background-color:#ffff33">
                    <div class="text-white text-center py-3">
                        <div>Pending</div>
                        <h3><?php echo $pending_status ?></h3>
                    </div>
                </div>

                <div class="card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center" style="background-color:#ffff33">
                    <div class="text-white text-center">
                        <div>Keep In View</div>
                        <h3><?php echo $kiv_status ?></h3>
                    </div>
                </div>

                <div class="card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center" style="background-color:#ffff33">
                    <div class="text-white text-center">
                        <div>Active</div>
                        <h3><?php echo $active_status ?></h3>
                    </div>
                </div>
                <div class="card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center" style="background-color:#ffff33">
                    <div class="text-white text-center">
                        <div>Closed</div>
                        <h3><?php echo $closed_status ?></h3>
                    </div>
                </div>
            </div>
            <?php 
                if ($role=='helpdesk' || $role=='admin' || $helpdesk==true) {
                    echo "<div class='text-decoration-underline py-4'>Helpdesk</div>
                            <div class='d-flex justify-content-evenly align-items-between pb-md-0 pb-3 row'>
                                <div class='card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center' style='background-color:#4CAF50'>
                                    <div class='text-white text-center py-3'>
                                        <div>Pending</div>
                                        <h3>$overall_pending_status</h3>
                                    </div>
                                </div>
                
                                <div class='card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center' style='background-color:#4CAF50'>
                                    <div class='text-white text-center'>
                                        <div>Keep In View</div>
                                        <h3>$overall_kiv_status</h3>
                                    </div>
                                </div>
                
                                <div class='card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center' style='background-color:#4CAF50'>
                                    <div class='text-white text-center'>
                                        <div>Active</div>
                                        <h3>$overall_active_status</h3>
                                    </div>
                                </div>
                                <div class='card border border-0 col-md-2 col-sm-5 col-12 d-flex justify-content-center' style='background-color:#4CAF50'>
                                    <div class='text-white text-center'>
                                        <div>Closed</div>
                                        <h3>$overall_closed_status</h3>
                                    </div>
                                </div>
                            </div>";
                }
                else if ($role=='executive') {
                    echo "<div class='text-decoration-underline py-4'>Complaint Execution</div>
                            <div class='d-flex justify-content-evenly align-items-between pb-md-0 pb-3 row'>
                                <div class='card bg-warning bg-gradient border border-0 hover-blacktogrey col-md-2 col-sm-5 col-12 d-flex justify-content-center'>
                                    <div class='text-white text-center'>
                                        <div>Pending</div>
                                        <h3>$executive_pending_status</h3>
                                    </div>
                                </div>
                                <div class='card bg-warning bg-gradient border border-0 hover-greytoback col-md-2 col-sm-5 col-12 d-flex justify-content-center'>
                                    <div class='text-white text-center'>
                                        <div>Keep In View</div>
                                        <h3>$executive_kiv_status</h3>
                                    </div>
                                </div>
                
                                <div class='card bg-warning bg-gradient border border-0 hover-blacktogrey col-md-2 col-sm-5 col-12 d-flex justify-content-center'>
                                    <div class='text-white text-center'>
                                        <div>Active</div>
                                        <h3>$executive_active_status</h3>
                                    </div>
                                </div>
                                <div class='card bg-warning bg-gradient border border-0 hover-greytoback col-md-2 col-sm-5 col-12 d-flex justify-content-center'>
                                    <div class='text-white text-center'>
                                        <div>Closed</div>
                                        <h3>$executive_closed_status</h3>
                                    </div>
                                </div>
                            </div>";
                }
            ?>
            
            <div class="text-decoration-underline py-4">Latest Information</div>
            <div class="overflow-auto">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr class="text-center">
                        <th>Title</th>
                        <th>Executive</th>
                        <th>Status</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        if ($role=='student') {
                            include 'config/database.php';

                            try {
                                $query = "SELECT * from complaint inner join department on complaint.departmentID=department.department_ID WHERE userID = :userID";
                                $stmt = $con->prepare($query);
                                $stmt->bindParam(":userID", $_SESSION['user_id']);
                                $stmt->execute();
                                $num = $stmt->rowCount();

                                if ($num > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        echo "<tr>
                                                <td>$title</td>
                                                <td>$department_name</td>
                                                <td class='text-center'>$status</td>
                                                <td>$modifydate</td>
                                                <td class='text-center'><a href='complain_detail.php?complaintID=$complaintID'><i class='fa-solid fa-eye'></i></a></td>
                                            </tr>";
                                    }
                                }
                                
                            }
                            // show error
                            catch (PDOException $exception) {
                                die('ERROR: ' . $exception->getMessage());
                            }
                            
                        }
                        if ($role=='helpdesk' || $role=='admin' || $helpdesk==true) {
                            include 'config/database.php';

                            try {
                                $query = "SELECT * from complaint inner join department on complaint.departmentID=department.department_ID";
                                $stmt = $con->prepare($query);
                                $stmt->execute();
                                $num = $stmt->rowCount();

                                if ($num > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        echo "<tr>
                                                <td>$title</td>
                                                <td>$department_name</td>
                                                <td class='text-center'>$status</td>
                                                <td>$modifydate</td>
                                                <td class='text-center'><a href='complain_detail.php?complaintID=$complaintID'><i class='fa-solid fa-eye'></i></a></td>
                                            </tr>";
                                    }
                                }
                                
                            }
                            // show error
                            catch (PDOException $exception) {
                                die('ERROR: ' . $exception->getMessage());
                            }
                        }

                        if ($role=='executive') {
                        
                            include 'config/database.php';
                            try {
                                $query = "SELECT * from complaint inner join department on complaint.departmentID=department.department_ID WHERE complaint.departmentID=:departmentID";
                                $stmt = $con->prepare($query);
                                $stmt->bindParam(":departmentID",$department_ID);
                                $stmt->execute();
                                $num = $stmt->rowCount();
            
                                if ($num > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        echo "<tr>
                                                <td>$title</td>
                                                <td>$department_name</td>
                                                <td class='text-center'>$status</td>
                                                <td>$modifydate</td>
                                                <td class='text-center'><a href='complain_detail.php?complaintID=$complaintID'><i class='fa-solid fa-eye'></i></a></td>
                                            </tr>";
                                    }
                                }
                                
                            }
                            // show error
                            catch (PDOException $exception) {
                                die('ERROR: ' . $exception->getMessage());
                            }
                        }
                        
                    
                    
                    ?>
                    
                </table>
            </div>
        </section>
        
        </main>

        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>