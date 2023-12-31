<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'hod') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Paper Publication Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="hprint.css" rel="stylesheet" type="text/css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<?php
    include("../database/dbase.php");
    $sql = "Select * from journal_details";
    $result = mysqli_query($cn, "$sql");
    $row = $result->fetch_assoc();
    $regno = $row['s_id'];
    $name = $row['Name'];
    $appid = $row['appid'];
    ?>
  <table border="0" width="90%" align="center" class="date">
    <tr>
      <td width="20%" align="right">
        <?php echo date('F d,Y'); ?>
        <?php
        date_default_timezone_set('Asia/Kolkata'); // Set the timezone to IST
        $current_time_ist = date('h:i A'); // Format the time as desired

        echo "$current_time_ist";
        ?>
      </td>
    </tr>
  </table>

  <table border="1" width="90%" align="center" class="header">
    <tr>
      <td width="10%" align="left"><a href="adminpanel/index.php">
          <img src="../Image/clg logo.png" /></a>
      </td>
      <td width="90%" align="center">
        <p>St.Joseph's College <span1>(Autonmous)</span1>,<br>
        <span><p1>Accredited at A++ Grade (Cycle IV) by NAAC
        Special Heritage Status Awarded by UGC<br>
        College with Potential for Excellence by UGC
        DBT-STAR & DST-FIST Sponsored College</p1></span><br>
        Tiruchirappalli - 620 002.</p>
      </td>
    </tr>
  </table>

  <table border="1" align="center" width="90%" class="title">
    <tr>
      <td width="100%" align="center">
        <h1>RESEARCH PAPER PUBLICAIONS DETAILS</h1>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="80%" align="center">
        <p><span>Personal Detials</span></p>
      </td>
      <td width="20%" align="center">
        <p><span><?php echo $appid ?></span></p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="15%" align="center">
        <p class="la">Register number</p>
      </td>
      <td width="35%" align="left">
        <p><?php echo $regno ?></p>
      </td>
      <td width="15%" align="center">
        <p class="la">Name</p>
      </td>
      <td width="35%" align="left">
        <p><?php echo $name ?></p>
      </td>
    </tr>
    <tr>
      <td width="15%" align="center">
        <p class="la">Qualifications</p>
      </td>
      <td width="35%" align="left">
        <p>BCA., MCA</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Email</p>
      </td>
      <td width="35%" align="left">
        <p>leodaniel@gmail.com</p>
      </td>
    </tr>
  </table>

  <!--Research Paper Publication detials-->

  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="100%" align="center">
        <p><span>Paper Publication Detials</span></p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="15%" align="center">
        <p class="la">Guide Name</p>
      </td>
      <td width="35%" align="left">
        <p>Dr. Ravindran</p>
      </td>
      <td width="15%" align="center">
        <p class="la">H - Index</p>
      </td>
      <td width="10%" align="center">
        <p>12</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Number of Publications</p>
      </td>
      <td width="10%" align="center">
        <p>2</p>
      </td>
    </tr>
  </table>

  <!--Research Paper detials-->

  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="100%" align="center">
        <p><span>Research Paper Details</span></p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="15%" align="center">
        <p class="la">Journal Name</p>
      </td>
      <td width="35%" align="left">
        <p>Journal of Computer Science Research</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Journal Type</p>
      </td>
      <td width="35%" align="left">
        <p>Scopus</p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="15%" align="center">
        <p class="la">Title of the paper</p>
      </td>
      <td width="35%" align="center">
        <p>A Novel Algorithm for Image Recognition Using Deep</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Impact Factor</p>
      </td>
      <td width="10%" align="center">
        <p>5.7</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Issue Date</p>
      </td>
      <td width="20%" align="center">
        <p>2023-09-06</p>
      </td>
    </tr>
  </table>
  <!--PDF Detials-->
  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="100%" align="center">
        <p><span>PDF Details</span></p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="15%" align="center">
        <p>PDF File attached!!</p>
      </td>
    </tr>
  </table><br>

  <!-- Buttons -->

  <table border="0" align="center" width="30%" class="buttons">
    <tr>
      <td width="10%" align="right"><button type="button" class="btn btn-danger custom-button">Reject</button></td>
      <td width="10%" align="center"><button type="button" class="btn btn-success custom-button">Approve</button></td>
      <td width="10%" align="left"><button class="btn btn-primary hidden-print custom-button" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button></td>

    </tr>
  </table><br>

  <table border="0" align="center" width="90%" class="button">
    <tr>
      <td width="10%" align="center"><a href="hviewfile.php"><button type="button" class="btn btn-secondary custom-button">Back</button></a></td>
    </tr>
  </table>

  <script>
    function myFunction() {
      window.print();
    }
  </script>
</body>

</html>
<?php
} else {
    header("location:../Login/index.php");
}
?>