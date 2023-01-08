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
    <link href="css/student.css" rel="stylesheet">
</head>

<body>
<?php include "nvgtop.php" ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Complaint Form</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Title</div>
                    <div class="col-8 py-2 border border-3 rounded">Complaint Title</div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Detail</div>
                    <div class="col-8 py-2 border border-3 rounded">Detail word</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 py-2">Photo/Video:</div>
                    <div class="col-8 py-2 border border-3 rounded"><img src="images/no_people_img.png" alt="" width="100px"></div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Executive</div>
                    <div class="col-8 py-2 border border-3 rounded">Ali</div>
                </div>
                <div class="row d-flex align-items-center my-3 border-bottom border-2 pb-3">
                    <div class="col-4 py-2">Date</div>
                    <div class="col-8 py-2 border border-3 rounded">2020</div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4  py-2">Current Status:</div>
                    <div class="col-8  py-2 px-0">
                        <div class="btn <?php if ($status == "pending" || $status == "keep_in_view") {
                                                echo "btn-waring";
                                            } else if ($status == "active") {
                                                echo "btn-success";
                                            } else {
                                                echo "btn-secondary";
                                            } ?>"><?php switch ($status) {
                                                        case "pending":
                                                            echo "Pending";
                                                            break;
                                                        case "keep_in_view":
                                                            echo "Keep in View";
                                                            break;
                                                        case "active":
                                                            echo "Active";
                                                            break;
                                                        default:
                                                            echo "Closed";
                                                    } ?></div></div>
                    </div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="py-2 col-4">Group: </div>
                    <div class="col-8 px-0 ">
                        <input list="list_category" name="category" id="category" class="form-control border border-3 rounded">
                        <datalist id="list_category">
                            <option value="Computer Class Problem">
                            <option value="Student Portal Problem">
                            <option value="Hostel Problem">
                        </datalist>
                    </div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Notes</div>
                    <div class="col-8 py-2 border border-3 rounded">Ali</div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="py-2 col-4">Action: </div>
                    <div class="col-8 px-0 d-flex align-items-center">
                        <input type="radio" name="action" value="accept" id="accept" class="ms-1 mx-2">
                        <label for="accept" class="me-4">Accept</label>
                        <input type="radio" name="action" value="closed" id="closed" class="ms-1 mx-2">
                        <label for="closed" class="me-4">Closed</label>
                    </div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="py-2 col-4">Assign: </div>
                    <div class="col-8 px-0 d-flex align-items-center">
                        <select name="assign" id="assgin" class="form-select border border-3 rounded">
                            <option value="default">None / Executive Departments</option>
                        </select>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>