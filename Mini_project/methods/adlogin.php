<?php
session_start();
if (isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {
    $uname = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        if ($uname == "admin" && $pass == "321") {
            $_SESSION['adname'] = "admin";
            header("Location: ../adminhome.php");
        } else {
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}