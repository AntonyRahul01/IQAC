<?php
// Step 1: Establish a Database Connection
$servername = "localhost"; // Replace with your database server name
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$dbname = "your_database_name"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Prepare and Execute a Query
$sql = "SELECT * FROM your_table_name"; // Replace "your_table_name" with the actual table name
$result = $conn->query($sql);

// Step 3: Retrieve and Process the Data
if ($result->num_rows > 0) {
    // Loop through the result set and fetch data
    while ($row = $result->fetch_assoc()) {
        // Access individual data fields using column names
        $name = $row["name"];
        $guidename = $row["guidename"];
        // Add more fields as needed
        // ...
        // Process the data (e.g., display it, store it in variables, etc.)
        echo "Name: " . $name . ", Guide Name: " . $guidename . "<br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
