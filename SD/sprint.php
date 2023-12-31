<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Paper Publication Report</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="sprint.css" rel="stylesheet" type="text/css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<?php
    include("../database/dbase.php");
    $id = $_SESSION['s_id'];
    $sql = "Select * from user_details where s_id='$id'";
    $result = mysqli_query($cn, "$sql");
    $row = $result->fetch_assoc();
    $regno = $row['s_id'];
    $quali = $row['quali'];
    $name = $row['name'];
    $guidename = $row['guidename'];
    $email = $row['email'];
    ?>
    <?php
    $id = $_SESSION['s_id'];
    include("../database/dbase.php");
    $sql = "SELECT COUNT(*) AS count FROM journal_details WHERE s_id='$id'";
    $result = mysqli_query($cn, $sql);
    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . mysqli_error($cn));
    }

    // Fetch the result
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    mysqli_close($cn);
    ?><br>
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
        <h1>RESEARCH PAPER PUBLICAIONS REPORT</h1>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="100%" align="center">
        <p><span>Personal Detials</span></p>
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
        <p><?php echo $quali ?></p>
      </td>
      <td width="15%" align="center">
        <p class="la">Email</p>
      </td>
      <td width="35%" align="left">
        <p><?php echo $email ?></p>
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
        <p><?php echo $guidename ?></p>
      </td>
      <td width="15%" align="center">
        <p class="la">Currrent H - Index</p>
      </td>
      <td width="10%" align="center">
        <p>12</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Number of Publications</p>
      </td>
      <td width="10%" align="center">
        <p><?php echo $count ?></p>
      </td>
    </tr>
  </table>


  <!--PDF Detials-->
  <table border="1" align="center" width="90%" class="subtitle">
    <tr>
      <td width="100%" align="center">
        <p><span>Number of Paper Published</span></p>
      </td>
    </tr>
  </table>
  <table border="1" align="center" width="90%" class="details">
    <tr>
      <td width="10%" align="center">
        <p class="la">S.no</p>
      </td>
      <td width="25%" align="center">
        <p class="la">Jornal Name</p>
      </td>
      <td width="10%" align="center">
        <p class="la">Jornal Type</p>
      </td>
      <td width="25%" align="center">
        <p class="la">Title of the paper</p>
      </td>
      <td width="10%" align="center">
        <p class="la">H - Index</p>
      </td>
      <td width="10%" align="center">
        <p class="la">Impact Factor</p>
      </td>
      <td width="15%" align="center">
        <p class="la">Issued Date</p>
      </td>
    </tr>
    <?php
                // Include the database connection
                include("../database/dbase.php");

                $id=$_SESSION['s_id'];

                // Initialize a counter for the serial number
                $serialNumber = 1;

                // Modify this SQL query to retrieve the data you need from your database
                $sql = "SELECT JournalName, JournalType, PaperTitle, HIndex, ImpactFactor, IssueDate FROM journal_details WHERE s_id='$id'";

                // Execute the query
                $result = mysqli_query($cn, $sql);
                // Check for query execution errors
                if (!$result) {
                    die("Query failed: " . mysqli_error($cn));
                }

                // Check if there are any rows in the result set
                if (mysqli_num_rows($result) > 0) {
                    // Loop through the rows and display data in a table
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr>";
                        echo "<td>" . $serialNumber . "</td>";
                        echo "<td>" . $row["JournalName"] . "</td>";
                        echo "<td>" . $row["JournalType"] . "</td>";
                        echo "<td>" . $row["PaperTitle"] . "</td>";
                        echo "<td>" . $row["HIndex"] . "</td>";
                        echo "<td>" . $row["ImpactFactor"] . "</td>";
                        echo "<td>" . $row["IssueDate"] . "</td>";

                        echo "</tr>";
                        // Increment the serial number for the next row
                $serialNumber++;
                    }
                } else {
                    echo "<td colspan='6'>No records found</td>";
                }

                // Close the database connection
                mysqli_close($cn);
                ?>
  </table><br>

  <!-- Buttons -->

  <table border="0" align="center" width="30%" class="buttons">
    <tr>
      <td width="50%" align="center"><a href="view.php"><button type="button" class="btn btn-secondary custom-button">Back</button></a></td>
      <td width="50%" align="center"><button class="btn btn-primary hidden-print custom-button" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button></td>
    </tr>
  </table><br>

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