<?php
session_start();
include("../database/dbase.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $st = mysqli_query($cn, "select * from login where s_id='$username' and password='$password' ");
    $st1 = mysqli_query($cn,"select * from staff_detail where s_id='$username'");
    if ($st->num_rows == 1) {
        $rows = mysqli_fetch_assoc($st);
        $position = $rows['position'];

        if ($position == 'stud') {
            $_SESSION['s_id'] = $username;
            $_SESSION['position'] = $position;
            header("location:..\SD\index.php");
        } elseif ($position == 'hod') {
            $_SESSION['s_id'] = $username;
            $_SESSION['position'] = $position;

            header("location:..\HOD\dashboard.php");
        } elseif ($position == 'iqac') {
            $_SESSION['s_id'] = $username;
            $_SESSION['position'] = $position;

            header("location:..\IQAC\dashboard.php");
        } else {
            $_SESSION['alert'] = "unable to login try again";
            header("location:index.php");
        }
    } else {
        $_SESSION['alert'] = "invalid password or username";
        echo "<script type=text/javascript> alert('You are not authorised user!'); window.location.assign('index.php');</script>";
        
    }
}
