<?php
    session_start();
    $user_session=isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : NULL;

    if($user_session==NULL) {
        // header("location: login.php");
    }
    else {
        include 'config/database.php';
        $query = "SELECT username,image from student WHERE id = :id ";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":id", $_SESSION['user_id']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $username_=$row['username'];
        $image_=$row['image'];
    }
?>