<?php
    $conn = new mysqli("localhost","root","", "general");
    if($conn->connect_error)
    {
        die("Conexión fallida: ".$conn->connect_error);
    }
    $user = $_POST["adminid"];
    $pwd = $_POST["password"];
    $sql = "SELECT adminid, password FROM project_06_admin";
    $found = false;
    if ($result = mysqli_query($conn, $sql))
    {
        while ($row = mysqli_fetch_row($result))
        {
            if ($user == $row[0] && $pwd == $row[1])
            {
                header("Location: admin_view.php");
                $found = true;
                break;
            }
        }
        mysqli_free_result($result);
        if (!$found) {
            header("Location: admin_not_found.php");
        }
    }
?>