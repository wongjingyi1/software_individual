<?php
include "reusable_components/user_session.php"
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helpdesk - Complaint Management</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/f9f6f2f33c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .fa-eye:hover,
        .fa-pen-to-square:hover {
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
            <h1>Complaint Management</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <div class="row">
                <div class="col-md-7 col-9 d-flex py-4 justify-content-center align-items-center text-center px-sm-5 px-0">
                    <label for="list_complain" class="form-label text-end m-0 pe-2">Sent:</label>
                    <select class="form-select" id="list_complain" name="list_complain" onchange="filter(this)">
                        <option value="all">All</option>
                        <option value="pending">Pending</option>
                        <option value="keep_in_view">Keep in View</option>
                        <option value="active">Active</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-center justify-content-md-center justify-content-start px-md-0 px-sm-5 px-0 mb-md-0 mb-3">
                    <div class="me-2">Group:</div>
                    <button class="btn btn-dark me-2" type="button" data-bs-target="#create_group" data-bs-toggle="modal" onclick='pass_data()'>Create</button>
                    <div class="modal fade" id="create_group" tabindex="-1" aria-labelledby="modal_create_group" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modal_create_group">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="clear()"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center fw-bold">Enter title group name</div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <form method="POST" id='form'>
                                            <div id='element'></div>
                                        <form>
                                        
                                    </div>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clear()">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary me-2" type="button" data-bs-target="#add_group" data-bs-toggle="modal">Add to ...</button>
                    <div class="modal fade" id="add_group" tabindex="-1" aria-labelledby="modal_add_group" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modal_add_group">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-auto">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr class="text-center">
                        <th></th>
                        <th>Title</th></a>
                        <th>Executive</th>
                        <th>Status</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        if ($role=='helpdesk' || $role=='admin' || $helpdesk==true) {
                            include 'config/database.php';

                            try {
                                $query = "SELECT * from complaint WHERE departmentID IS NULL";
                                $stmt = $con->prepare($query);
                                $stmt->execute();
                                $num = $stmt->rowCount();

                                if ($num > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        echo "<tr class='complain'>
                                                <td class='text-end'><input type='checkbox' class='radio_checkbox' value='$complaintID-$title'></td>
                                                <td>$title</td>
                                                <td>Executive</td>
                                                <td class='status'>$status</td>
                                                <td>$modifydate</td>
                                                <td class='d-flex justify-content-center align-items-center'><i class='fa-regular fa-pen-to-square'></i>&nbsp;<i class='fa-solid fa-eye '></i></td>
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
            <?php 
                // if ($status == "pending" || $status == "keep_in_view") {
                //     echo "btn-waring";
                // } 
                // else if ($status == "active") {
                //     echo "btn-success";
                // } 
                // else {
                //     echo "btn-secondary";
                // }
            ?>
            <?php
                // switch ($status) {
                //         case "pending":
                //             echo "Pending";
                //             break;
                //         case "keep_in_view":
                //             echo "Keep in View";
                //             break;
                //         case "active":
                //             echo "Active";
                //             break;
                //         default:
                //             echo "Closed";
                // } 
            ?>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>

    <script>
        function drop_item() {
            document.querySelector('#order').onclick = function(ev) {
                // only if the innerHTML (tag content) is "Delete"
                if (ev.target.innerHTML == "Delete") {
                    // get all the tag which name as ".pRow"
                    var table = document.querySelectorAll('.pRow');
                    var rowCount = table.length;

                    // if the table row is lager than 1
                    if (rowCount > 1) {
                        // get the row tag (tr)
                        var table_row = ev.target.parentElement.parentElement;
                        table_row.remove(table_row);
                    } else {
                        alert("You remain at least one row at the table");
                    }

                }
            }
        }

        function pass_data() {

            $(".radio_checkbox:checked").each(function(val){
                $( 
                    "<div class='d-flex'>"+
                        $(this).val()+
                        "<div onclick='drop_item()' class='drop_item'><i class='fa-solid fa-xmark'></i></div>"+
                    "</div>" 
                
                
                ).insertAfter( "#element" );
            })

            
        }

        function clear() {
            $(":checked").attr('checked', false)
            $("#form").empty();
        }

        function filter(fil_ter) {
            var complain_length=document.getElementsByClassName("complain").length;
            
            if (fil_ter.value=='pending') {
                for (var i=0 ; i<complain_length ; i++) {
                    if (!(document.getElementsByClassName("status")[i].innerHTML=="pending")) {
                        document.getElementsByClassName("complain")[i].style.display = "none";
                    }
                    else {
                        document.getElementsByClassName("complain")[i].style.display = "";
                    }
                }
            }
            if (fil_ter.value=='keep_in_view') {
                for (var i=0 ; i<complain_length ; i++) {
                    if (!(document.getElementsByClassName("status")[i].innerHTML=="kiv")) {
                        document.getElementsByClassName("complain")[i].style.display = "none";
                    }
                    else {
                        document.getElementsByClassName("complain")[i].style.display = "";
                    }
                }
            }
            if (fil_ter.value=='active') {
                for (var i=0 ; i<complain_length ; i++) {
                    if (!(document.getElementsByClassName("status")[i].innerHTML=="active")) {
                        document.getElementsByClassName("complain")[i].style.display = "none";
                    }
                    else {
                        document.getElementsByClassName("complain")[i].style.display = "";
                    }
                }
            }
            if (fil_ter.value=='closed') {
                for (var i=0 ; i<complain_length ; i++) {
                    if (!(document.getElementsByClassName("status")[i].innerHTML=="closed")) {
                        document.getElementsByClassName("complain")[i].style.display = "none";
                    }
                    else {
                        document.getElementsByClassName("complain")[i].style.display = "";
                    }
                }
            }
            if (fil_ter.value=='all') {
                for (var i=0 ; i<complain_length ; i++) {
                    document.getElementsByClassName("complain")[i].style.display = "";
                }
            }
            


        }
    </script>

</body>

</html>