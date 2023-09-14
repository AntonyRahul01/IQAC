<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link rel="stylesheet" href="dstyle.css">
    <style>
        body {
            position: relative;
            font-family: Arial, sans-serif;
        }

        header {
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

        tr:nth-child(odd) {
            background-color: #ddd;
        }

        tr:hover {
            cursor: pointer;
            background-color: #fff;
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
                    <th>Name</th>
                    <th>Guide Name</th>
                    <th>Journal Name</th>
                    <th>H-Index</th>
                    <th>Journal Type</th>
                    <th>View PDF</th> <!-- Add a new column for viewing PDFs -->
                </tr>
                <?php
                // Include the database connection
                include("../database/dbase.php");

                // Modify this SQL query to retrieve the data you need from your database
                $sql = "SELECT Name, GuideName, JournalName, HIndex, JournalType, file FROM journal_details";

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
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["GuideName"] . "</td>";
                        echo "<td>" . $row["JournalName"] . "</td>";
                        echo "<td>" . $row["HIndex"] . "</td>";
                        echo "<td>" . $row["JournalType"] . "</td>";

                        // Add a link to view the PDF file
                        echo "<td><a href='" . $row["file"] . "' target='_blank'>View PDF</a></td>";

                        echo "</tr>";
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