<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script type="text/javascript">
		function disableBackButton()
		{
		window.history.forward()
		}  
		disableBackButton();  
		window.onload=disableBackButton();  
		window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }  
		window.onunload=function() { void(0) } 
	</script>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="https://studerp.sjctni.edu/StudERP/login/assets/images/8.jpg" alt="">
                <div class="text">
                    <span class="text-1">St.Joseph's College</span>
                    <span class="text-1-sub">(Autonomous)</span>
                    <span class="text-2">Tiruchirappalli-620002.</span>
                </div>
            </div>
        </div>
        <form action="" method="post">
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Scholar Login</div>
                    <form action="#">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Username" name="una" id="una" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" name="pwd" id="pwd" required>
                            </div>
                            <br>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Login" name="sbt_lgn_btn" id="sbt_lgn_btn">
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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