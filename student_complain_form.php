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
            <h1>Complaint Form</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                <div class="text-decoration-underline py-4">Add New:</div>
                <div class="row">
                    <div class="d-flex col-12 pb-3 container">
                        <label for="category" class="form-label col-4 me-2">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="-1">Default</option>
                            <option value="1">Classes</option>
                            <option value="2">Bulding</option>
                            <option value="3">Teachers</option>
                            <option value="4">Grades</option>
                            <option value="5">Communication</option>
                            <option value="6">Lunch</option>
                        </select>
                    </div>


                    <div class="col-4 pb-3">Title</div>
                    <div class="col-8 pb-3">
                        <input type="text" name="title" class='form-control'>
                    </div>
                    <div class="col-4 pb-3">Message</div>
                    <div class="col-8 pb-3">
                        <textarea rows="5" cols="33" name='message' class='form-control'></textarea>
                    </div>
                </div>
                <div class="border-top border-1 border-dark">
                    <div class="py-3">Attached: Photo / Video</div>
                    <input type="file" name="image" class='form-control' />
                </div>
            </form>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>