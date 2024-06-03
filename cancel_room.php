<?php
    $conn = new mysqli("localhost","root","", "general");
    if($conn->connect_error)
    {
        die("Conexión fallida: ".$conn->connect_error);
    }
    $bid = $_POST["book_id"];
    $sql = "SELECT * from project_06_user_room WHERE book_id='$bid'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        $sql1 = "DELETE FROM project_06_user_room WHERE book_id='$bid'";
        mysqli_query($conn,$sql1);
        header("Location: cancel_room1.php");
    }
    else {
        header("Location: admin_failure.php");
    }
?>