<!DOCTYPE html>
<html>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="s_id" name="s_id" id="s_id" oninput="this.value = this.value.toUpperCase()"/><br>
        <input type="email" placeholder="Email" name="email" id="email" /><br>
        <input type="text" placeholder="Name" name="name" id="name" /><br>
        <input type="text" placeholder="Guide Name" name="guidename" id="guidename" /><br>
        <input type="text" placeholder="Quali" name="quali" id="quali" /><br>
        <input type="text" placeholder="Enter no of paper" name="npaper" id="npaper" /><br>
        <input type="file" name="file" id="file"><br>   
        <label>Image </label><input type="file" id="img" name="img">
        <input type="submit" name="add_paper_btn" id="add_paper_btn" value="submit" />
        <input type="reset" name="clear" />
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
        $target_directory = "assets/pdf/";
        $file_name = $_FILES['file']['name']; //pdf
        $file_path = $target_directory . $file_name;
        $file_path2 = "../assets/pdf/" . $file_name;

        //Image
        $img_directory = "assets/image/";
        $img_name = $_FILES['img']['name']; // image  
        $img_path = $img_directory . $img_name;
        $img_path2 = "../assets/image/" . $img_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path) && move_uploaded_file($_FILES['img']['tmp_name'], $img_path)) {
            // File uploaded successfully, now insert data into the database
            $sql = "INSERT INTO user_details (s_id, email, name, guidename, quali, npaper, file, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $cn->prepare($sql);
            if ($stmt === false) {
                echo 'Statement preparation failed.';
            }
            // Bind parameters and execute the query
            $stmt->bind_param("ssssssss", $s_id, $email, $name, $guidename, $quali, $npaper, $file_path2, $img_path2);

            if ($stmt->execute()) {
                echo "<script type='text/javascript'> alert('Uploaded successfully!'); window.location.assign('up.php');</script>";
            } else {
                echo "Insertion failed. Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to upload file.";
        }

        // Close the database connection
        $cn->close();
    } else {
    }
    ?>