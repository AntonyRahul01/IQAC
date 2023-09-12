<!DOCTYPE html>
<html>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="s_id" name="s_id" id="s_id" /><br>
        <input type="email" placeholder="Email" name="email" id="email" /><br>
        <input type="text" placeholder="Name" name="name" id="name" /><br>
        <input type="text" placeholder="Guide Name" name="guidename" id="guidename" /><br>
        <input type="text" placeholder="Quali" name="quali" id="quali" /><br>
        <input type="text" placeholder="Enter no of paper" name="npaper" id="npaper" /><br>
        <input type="file" name="file" id="file">
        <input type="submit" name="add_paper_btn" id="add_paper_btn" value="submit" />
        <a href="table.php"><input type="button" value="view"></a>
    </form>
    <?php
    // upload_handler.php

    include("./database/dbase.php");

    if (isset($_POST['add_paper_btn'])) {
        $s_id = addslashes($_POST['s_id']);
        $email = addslashes($_POST['email']);
        $name = addslashes($_POST['name']);
        $guidename = addslashes($_POST['guidename']);
        $quali = addslashes($_POST['quali']);
        $npaper = addslashes($_POST['npaper']);


        // File upload handling
        $target_directory = "uploads/";
        $file_name = $_FILES['file']['name'];
        $file_path = $target_directory . $file_name;
        $file_path2 = "../uploads/".$file_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
            // File uploaded successfully, now insert data into the database
            $sql = "INSERT INTO user_details (s_id, email, name, guidename, quali, npaper, file)
            VALUES (?, ?, ?, ?, ?, ?,?)";
            $stmt = $cn->prepare($sql);
            if ($stmt === false) {
                echo 'Statement preparation failed.';
            }

            // Bind parameters and execute the query
            $stmt->bind_param("sssssss", $s_id, $email, $name, $guidename, $quali, $npaper, $file_path2);

            if ($stmt->execute()) {
                echo "<script type=text/javascript> alert('Uploaded successfully!'); window.location.assign('up.php');</script>";
            } else {
                echo "Insertion failed. Error: " . $stmt->error;
            }
        } else {
            echo "Failed to upload file.";
        }

        // Close the database connection
        $cn->close();
    } else {

        echo "<script>alert('playing else bl');</script>";
    }
    ?>