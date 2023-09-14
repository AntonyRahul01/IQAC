<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="ustyle.css">
  <link rel="stylesheet" href="dstyle.css">
  <!----===== Iconscout CSS ===== -->

  <title>Details Upload</title>

</head>

<body>
  <?php include "dashboard.php"; ?>
  <div class="content">
    <div class="content_1">
      <div class="container">
        <header>Upload File</header>
        <?php include "../database/dbase.php"; ?>

        <form action="upload.php" method="POST" enctype="multipart/form-data">

          <div class="details personal">

            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-field">
                <label>Guide Name</label>
                <input type="text" name="guidename" placeholder="Enter the Guide name" required>
              </div>

              <div class="input-field">
                <label>Journal Name</label>
                <input type="text" name="journalname" placeholder="Enter the Journal name" required>
              </div>

              <div class="input-field">
                <label>H-Index</label>
                <input type="number" name="hindex" placeholder="Enter the H - Index" required>
              </div>

              <div class="input-field">
                <label>Journal Type</label>
                <select name="type" required>
                  <option disabled selected>Select Journal Type</option>
                  <option>UGC Care</option>
                  <option>Scopus</option>
                  <option>Web of Science</option>
                  <option>Others</option>
                </select>
              </div>

              <div class="input-field">
                <label>Title of the Paper</label>
                <input type="text" name="title" placeholder="Enter the Title of the Paper" required>
              </div>

              <div class="input-field">
                <label>Impact Factor</label>
                <input type="text" name="impactfactor" placeholder="Enter the Impact Factor" required>
              </div>
              <div class="input-field">
                <label>Issued Date</label>
                <input type="date" name="date" placeholder="Enter your issued date" required>
              </div>
              <div class="input-field">
                <label for="file">Choose File</label>
                <input type="file" id="file" name="file" accept="application/pdf" required>
                <span class="file-selected"></span>
              </div>

              <div class="buttons">
                <button class="clear" type="button" onclick="clearForm()">
                  <span class="btnText">Clearr</span>
                </button>

                <button type="submit" name="submit" class="submit" onclick="displaySuccessMessage(); return false;">
                  <span class="btnText">Submit</span>
                </button>
              </div>

            </div>
          </div>
        </form>
      </div>


    </div>

  </div>
  </div>
  <script>
    function clearForm() {
      var inputFields = document.querySelectorAll("input, select");
      for (var i = 0; i < inputFields.length; i++) {
        inputFields[i].value = "";
      }
    }
  </script>

</body>

</html>