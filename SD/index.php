<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page in HTML with CSS Code Example</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>
<script type="text/javascript">
		function disableBackButton()
		{
		window.history.forward()
		}  
		disableBackButton();  
		window.onload=disableBackButton();  
		window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }  
		window.onunload=function() { void(0) 
        } 
	</script>
<body>
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">

            </div>
        </div>


        <div class="right">
            <h5 style=" font-weight:bolder;color: #d30a0a ;width: 200%;  ">ST.JOSEPH'S COLLEGE (AUTONOMOUS),</h5>
            <h5 style=" font-weight:bolder;color: #d30a0a ;width: 200%;">TIRUCHIRAPPALLI-620002.</h5>
            <br>
            <h5>SCHOLAR LOGIN</h5>
            <form action="" method="post">
                <div class="inputs">
                    <input type="text" placeholder="user name" name="una" id="una" required>
                    <br>
                    <input type="password" placeholder="password" name="pwd" id="pwd" required>

                </div>

                <br><br>

                <div class="remember-me--forget-password">
                    <!-- Angular -->
                    <label>
                        <input type="checkbox" name="item" checked />
                        <span class="text-checkbox">Remember me</span>
                    </label>

                </div>

                <br>

                <button name="sbt_lgn_btn" id="sbt_lgn_btn">Login</button>

        </div>

    </div>
    <!-- Login code -->
    <?php
    include("dbase.php");
    if (isset($_REQUEST['sbt_lgn_btn'])) {
        $una = addslashes($_REQUEST['una']);
        $pwd = addslashes($_REQUEST['pwd']);

        $sql = mysqli_query($cn, "select * from user_detail where unam='" . $una . "'and upas='" . $pwd . "'");
        if ($dr = mysqli_fetch_array($sql)) {
            setcookie("login_user", $una, time() + (86400 * 30), "/");
            header('Location: dashboard.php');
        } else {
            echo "<script type=text/javascript> alert('You are not authorised user!'); window.location.assign('index.php');</script>";
        }
    }
    ?>

    </form>
</body>

</html>