<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Scholar Profile</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="dstyle.css">
</head>
<script type="text/javascript">
    function disableBackButton() {
        window.history.forward()
    }
    disableBackButton();
    window.onload = disableBackButton();
    window.onpageshow = function(evt) {
        if (evt.persisted) disableBackButton()
    }
    window.onunload = function() {
        void(0)
    }
</script>

<body>
    <?php include "dashboard.php"; ?>
    <?php
    include("../database/dbase.php");
    $id = $_SESSION['s_id'];
    $sql = "Select * from user_details where s_id='$id'";
    $result = mysqli_query($cn, "$sql");
    $row = $result->fetch_assoc();
    $profilename = $row['name'];
    $quali = $row['quali'];
    $email = $row['email'];
    $s_id = $row['s_id'];
    $guidename = $row['guidename'];
    $paper = $row['npaper'];
    $file = $row['file'];
    $image = $row['img'];
    ?>
    <div class="profilecard">
        <div class="wrapper">
            <div class="left">
            <img src="<?php echo $image; ?>" alt="userimage"/>
                <h4><?php echo $profilename ?></h4>
                <p>Ph D Scholar</p>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Information</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Full Name</h4>
                            <p><?php echo $profilename ?></p>
                        </div>
                        <div class="data">
                            <h4>Register Number</h4>
                            <p><?php echo $s_id ?></p>
                        </div>
                        <div class="data">
                            <h4>Qualification</h4>
                            <p><?php echo $quali ?></p>
                        </div>
                        <div class="data">
                            <h4>Email</h4>
                            <p><?php echo $email ?></p>
                        </div>
                    </div>
                </div>

                <div class="projects">
                    <h3>Paper Publications</h3>
                    <div class="projects_data">
                        <div class="data">
                            <h4>Guide Name</h4>
                            <p><?php echo $guidename ?></p>
                        </div>
                        <div class="data">
                            <h4>Guide Approval Form</h4>
                            <a href="<?php echo $file; ?> "target="_blank" title="View Approval Form">View File</a>
                        </div>
                        <div class="data">
                            <h4>No. of Paper Published</h4>
                            <p><?php echo $paper ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
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