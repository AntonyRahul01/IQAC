+<?php
// Check if the form is submitted and the submit button is clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    // Include the database connection file
    include "../database/dbase.php";

    // Get form data
    $name = $_POST['name'];
    $guidename = $_POST['guidename'];
    $journalname = $_POST['journalname'];
    $hindex = $_POST['hindex'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $impactfactor = $_POST['impactfactor'];
    $date = $_POST['date'];

    // File upload handling
    $target_directory = "../assets/";
    $file_name = $_FILES['file']['name'];
    $file_path = $target_directory . $file_name;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        // File uploaded successfully, now insert data into the database
        $sql = "INSERT INTO journal_details (Name, GuideName, JournalName, HIndex, JournalType, PaperTitle, ImpactFactor, IssueDate, file)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $cn->prepare($sql);
               if ($stmt === false) {
            echo 'Statement preparation failed.';
        }

        // Bind parameters and execute the query
        $stmt->bind_param("sssisssss", $name, $guidename, $journalname, $hindex, $type, $title, $impactfactor, $date, $file_path);

        if ($stmt->execute()) {
            echo "<script type=text/javascript> alert('Uploaded successfully!'); window.location.assign('uploadfile.php');</script>";
        } else {
            echo "Insertion failed. Error: " . $stmt->error;
        }
    } else {
        echo "Failed to upload file.";
    }

    // Close the database connection
    $cn->close();
}
else{
    
    echo "<script>alert('playing else bl');</script>";
}
?>