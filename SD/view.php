<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Details</title>
</head>
        <link rel="stylesheet" href="dstyle.css">
        <style>
            body {
                position: relative;
                font-family: Arial, sans-serif;
            }

            header {
                border-radius: 10px;
                text-align: center;
                font-size: 22px;
                background-color: #3B3086;
                color: white;
                padding: 8px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            th {
                font-size: 14pt;
                background-color: #3B3086;
                text-align: center;
                color: white;
            }

            tr {
                background-color: #fff;
            }

            tr:hover {
                cursor: pointer;
                background-color: #ddd;
            }

            .viewfile {
                position: relative;
                height: 500px;
                /* Set a fixed height for the container */
                width: calc(100% - 78px);
                left: 78px;
                transition: all 0.5s ease;
            }

            .viewfile .viewfile_1 {
                border-radius: 10px;
                font-weight: bold;
                color: #3B3086;
                margin: 12px;
            }
        </style>
    </head>

    <body>
        <?php include "dashboard.php"; ?>
        <div class="viewfile">
            <div class="viewfile_1">
                <header>Paper Publication Details</header>

                <table border="1">
                    <tr>
                        <th width="5%">S.no</th><!--7 used-->
                        <th width="9%">Issued Date</th><!--4 - 1 = 3-->
                        <th width="25%">Journal Name</th><!--7 + 1-->
                        <th width="5%">JournalType</th><!--7-->
                        <th width="25%">Title of the paper</th>
                        <th width="9%">H - Index</th>
                        <th width="12%">Impact Factor</th>
                        <th width="10%">View PDF</th> <!-- Add a new column for viewing PDFs -->
                    </tr>
                    <?php
                    // Include the database connection
                    include("../database/dbase.php");

                    $id = $_SESSION['s_id'];

                    // Initialize a counter for the serial number
                    $serialNumber = 1;

                    // Modify this SQL query to retrieve the data you need from your database
                    $sql = "SELECT s_id, IssueDate, JournalName, JournalType, PaperTitle, HIndex, ImpactFactor, file FROM journal_details WHERE s_id='$id'";

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
                            echo "<td>" . $row["IssueDate"] . "</td>";
                            echo "<td>" . $row["JournalName"] . "</td>";
                            echo "<td>" . $row["JournalType"] . "</td>";
                            echo "<td>" . $row["PaperTitle"] . "</td>";
                            echo "<td>" . $row["HIndex"] . "</td>";
                            echo "<td>" . $row["ImpactFactor"] . "</td>";

                            // Add a link to view the PDF file
                            echo "<td><a href='" . $row["file"] . "' target='_blank'>View PDF</a></td>";

                            echo "</tr>";

                            $serialNumber++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>No records found</td></tr>";
                    }

                    // Close the database connection
                    mysqli_close($cn);
                    ?>
                </table>

            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("location:../Login/index.php");
}
?>