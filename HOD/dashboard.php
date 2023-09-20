
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SCHOLAR HOME</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dstyle.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
 <div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">SJC Home</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="hviewfile.php">
            <i class='bx bx-list-ul'></i>
                <span class="links_name">View File</span>
            </a>
            <span class="tooltip">View File</span>
        </li>
        
        <li>
            <a href="#">
            <i class='bx bxs-file'></i>
                <span class="links_name">Report</span>
            </a>
            <span class="tooltip">Report</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <div class="name_job">
                    <a href="../Login/logout.php"><div class="name">Logout</div></a>
                </div>
            </div>
            
            <a href="../Login/logout.php">
            <i class="bx bx-log-out" id="log_out"></i>
            </a>
        </div>
    </div>
 </div>
 <div class="home_content">
    <div class="text"><h4>HOD Dashboard</h4></div>
 </div>
 <script>
    let btn =document.querySelector("#btn");
    let sidebar =document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
 </script>
 
</body>
</html>
