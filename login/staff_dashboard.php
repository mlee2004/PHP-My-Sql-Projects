<html>
<head>
    <title>Staff Dashboard</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body background="../images/PRACPIC.jpg">
<nav class="navbar navbar-expand-sm  navbar-dark" style="background: white">
    <!-- Brand -->
    <a class="navbar-brand" href=""><img src="../images/logo.png"  alt="Logo" class="logo" width="200" height="100"></a>

    <!-- Brand -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="staffDetails.php" style="color: black"><b>Staff Details</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inceptorDashboard.php" style="color: black"><b>User Dashboard</b></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  style="color: black">
                    <b>Reports</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="staff_details_report.php"  style="color: white; background: darkred;">
                        Staff Reports
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"  style="color: black"><b>Logout</b></a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="">
    <h4 class="text-center" style="color: white">Staff Dashboard</h4>
</div>
</body>
</html>