<?php
session_start();
if ($_SESSION['s_id'] && $_SESSION['position'] == 'stud') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Scholar Home</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="dstyle.css" />
        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    </head>

    <body>
        <?php include "dashboard.php"; ?>
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
        ?>
        <!-- Container to display the publication count -->
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1><?php echo $count ?></h1>
                    <span>No of Publications</span>
                </div>
                <div>
                    <span class="uil uil-book-open"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>2</h1>
                    <span>H - Index</span>
                </div>
                <div>
                    <span class="uil uil-arrow-growth"></span>
                </div>
            </div>
            <div class="card-single" id="hIndexCalculation">
                <div>
                    <h3>H - Index Calculation</h3>
                    <span>Click to Calculate</span>
                </div>
                <div>
                    <span class="uil uil-calculator"></span>
                </div>
            </div>
            <div id="newContentContainer"></div>
        </div>

        <script>
            // Flag to track if the new container has been created
            let newContainerCreated = false;

            // Add an event listener to the "H - Index Calculation" icon
            let hIndexCalculationIcon = document.querySelector("#hIndexCalculation");
            hIndexCalculationIcon.addEventListener("click", function() {
                if (!newContainerCreated) {
                    // Create a new container element
                    let newContainer = document.createElement("div");
                    newContainer.className = "new-container"; // You can add CSS classes to style it

                    // Add content to the new container
                    newContainer.innerHTML = `
                    <div class="cal-card-single">
    <div>
        <h3 align="center">H - Index Calculation</h3><br>
        <span>Enter your publication citation counts<br>(comma-separated): </span>
        <div class="input-field">
            <input type="text" placeholder="Enter the number" required/>
        </div>
        <span>Current H - Index: </span>
        <div class="input-field">
            <input type="text" placeholder="Current H - Index" required/>
        </div>
        <div class="buttons">
            <button type="submit" class="submit calculate" return false;">
                <span class="btnText">Calculate</span>
            </button>
            <button type="submit" name="submit" class="submit update"  return false;">
                <span class="btnText">Update</span>
            </button>
        </div>
    </div>
    <div>
        
    </div>
</div>        `;

                    // Append the new container to the placeholder container
                    let placeholderContainer = document.getElementById("newContentContainer");
                    placeholderContainer.appendChild(newContainer);

                    // Set the flag to true to prevent further creation
                    newContainerCreated = true;
                }
            });
        </script>

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