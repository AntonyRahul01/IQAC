<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profile.css" />
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
    <br><br><br><br>
    <div class="content">
        <div class="content_1">
            <div class="profile">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar">
                            <img src="prfimg.png" alt="User Avatar">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h1><?php echo $profilename ?></h1>
                        <p>Researcher</p>
                        <table id="customers">
                            <tr>
                                <td>Email</td>
                                <td> <?php echo $email ?></td>
                            </tr>
                            <tr>
                                <td>No. of Paper Published:</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Qualifications</td>
                                <td>B.Sc. Physics.,MCA</td>
                            </tr>
                            <tr>
                                <td>No. of Paper Published</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>No. of Conference attented</td>
                                <td>5</td>
                            </tr>
                        </table>
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