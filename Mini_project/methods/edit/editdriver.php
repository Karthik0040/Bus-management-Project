<?php
require_once('../connect.php');
if (isset($_POST['editbtn'])) {
    $drid = $_POST['drid'];
    $drname = $_POST['drname'];
    $drcontact = $_POST['drcontact'];
    $query2 = "UPDATE TABLE DRIVER SET Driver_name='$drname',Driver_contact='$drcontact' where Driver_id='$drid'";
    $result2 = $conn->query($query2);
    if ($result2) {
        $_SESSION['success'] = "Added successfully";
    } else {
        $_SESSION['status'] = "Not Added successfully";
    }
}
?>