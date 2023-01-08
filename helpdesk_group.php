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

        .box {
            width: 200px;
        }
    </style>
</head>

<body>
    <?php include "nvgtop.php" ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Group List</h1>
        </div><!-- End Page Title -->
        <section class="container section">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <div class="card">
                        <button class="card-header collapsed card-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" >
                        <b class="header-title">The Grouping Title</b>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-plus float-right "></i>
                            
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-0">
                            <div class="overflow-auto">
                                <table class='table table-hover table-responsive table-bordered'>
                                    <tr>
                                        <th>Title</th></a>
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
                                        <td><i class="fa-solid fa-eye "></i></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    <script>
        $('.card-btn').click(function() {
            $(this).find('i').toggleClass('fas fa-plus fas fa-minus')
        });
    </script>
</body>

</html>