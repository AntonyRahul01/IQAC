<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'hod') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>HOD: View File</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="hviewfile.css" />
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
        <div class="hviewfile">
            <div class="text1">
                <?php
                include("../database/dbase.php");
                $i = 1;
                ?>
                <table id="customers">
                    <tr>
                        <th>D.No</th>
                        <th>Name</th>
                        <th>Title of the paper</th>
                        <th>View pdf</th>
                        <th>Other Details</th>
                    </tr>
                    <?php
                    $sql = "SELECT s_id, Name, PaperTitle, file FROM journal_details";
                    $result = mysqli_query($cn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td align="center"><?php echo $row["s_id"]; ?></td>
                            <td align="center"><?php echo $row["Name"]; ?></td>
                            <td align="center"><?php echo $row["PaperTitle"]; ?></td>
                            <td align="center"><a href="<?php echo $row['file']; ?>" target="_blank">View file</a></td>
                            <td align="center"><a href="hprint.php">View details</a></td>
                        </tr>
                    <?php
                        $i = $i + 1;
                    }
                    ?>
                </table>

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