<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SCHOLAR HOME</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dstyle.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
<?php include "dashboard.php"; ?>
 <script>
    let btn =document.querySelector("#btn");
    let sidebar =document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
 </script>
 
</body>
</html>
<?php
} else {
    header("location:../Login/index.php");
}
?>