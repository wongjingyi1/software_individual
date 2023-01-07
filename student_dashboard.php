<?php
include "reusable_components/user_session.php"
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student - Dahboard</title>
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
    <?php include "student_nvgtop.php" ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <div class="text-decoration-underline py-4">Overview</div>
            <div class="d-flex justify-content-evenly align-items-between pb-md-0 pb-3 row">
                <div class="card bg-dark bg-gradient border border-0 hover-blacktogrey col-md-2 col-sm-5 col-12 d-flex justify-content-center">
                    <div class="text-white text-center py-3">
                        <div>Pending</div>
                        <h3>3</h3>
                    </div>
                </div>

                <div class="card bg-secondary bg-gradient border border-0 hover-greytoback col-md-2 col-sm-5 col-12 d-flex justify-content-center">
                    <div class="text-white text-center">
                        <div>Keep In View</div>
                        <h3>3</h3>
                    </div>
                </div>

                <div class="card bg-dark bg-gradient border border-0 hover-blacktogrey col-md-2 col-sm-5 col-12 d-flex justify-content-center">
                    <div class="text-white text-center">
                        <div>Active</div>
                        <h3>3</h3>
                    </div>
                </div>
                <div class="card bg-secondary bg-gradient border border-0 hover-greytoback col-md-2 col-sm-5 col-12 d-flex justify-content-center">
                    <div class="text-white text-center">
                        <div>Closed</div>
                        <h3>3</h3>
                    </div>
                </div>
            </div>
            <div class="text-decoration-underline py-4">Latest Information</div>
            <div class="overflow-auto">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <th>Title</th>
                        <th>Executive</th>
                        <th>Status</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>Executive</td>
                        <td>Status</td>
                        <td>Last Updated</td>
                        <td><i class="fa-solid fa-eye fa-2x"></i></td>
                    </tr>
                </table>
            </div>
        </section>
        </main>

        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>