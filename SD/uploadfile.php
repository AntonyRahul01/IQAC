<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Uploading File</title>
  <link rel="stylesheet" href="ustyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="title">Uploading File</div>
    <div class="content">
      <form id="upload-form">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Title of the Paper</span>
            <input type="text" placeholder="Enter your Title" required>
          </div>
          <div class="input-box">
            <span class="details">Journal Name</span>
            <input type="text" placeholder="Enter your Journal name" required>
          </div>
          <div class="input-box">
            <span class="details">Issue Date</span>
            <input type="date" required>
          </div>
          <div class="input-box">
            <span class="details">Author</span>
            <input type="text" placeholder="Enter the name" required>
          </div>
          <div class="input-box">
            <span class="details">Volume</span>
            <input type="text" placeholder="Enter the volume" required>
          </div>
          <div class="input-box">
            <span class="details">Impact Factor</span>
            <input type="text" placeholder="Enter Impact factor" required>
          </div>
          <div class="input-box">
            <span class="details">PDF File</span>
            <input type="file" accept="application/pdf" required>
          </div>
          
        </div>
        
        <div class="button-row">
          <div class="button">
            <input type="submit" value="Register">
          </div>
          <div class="button">
            <input type="button" value="Clear" onclick="clearForm()">
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    function clearForm() {
      // Reset the form
      document.getElementById("upload-form").reset();
    }
  </script>
</body>
</html>
