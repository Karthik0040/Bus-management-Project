<?php 
    require_once('connect.php');

    if(isset($_POST['addpass']))
    {
        $pid = $_POST['passid'];
        $usn = $_POST['usnno'];
        $idate = $_POST['isdate'];
        $vdate = $_POST['valdate'];
        $fstat = $_POST['fstatus'];

        $query = "INSERT INTO BUS_PASS(Pass_id,USN,Issued_date,Valid_till,Fee_status) VALUES ('$pid','$usn','$idate','$vdate','$fstat')";
        $result =  mysqli_query($conn,$query);

        if($result)
        {
            $_SESSION['success'] = "Added successfully";
            header("Location: ../addbuspass.php");

        }
        else
        {
            $_SESSION['status'] = "Not Added successfully";

        }
    }
?>