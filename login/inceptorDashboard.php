<html>
<head>
    <title>Inceptor ICT Centre Dashboard</title>
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

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../enquiries.php"><b style="color: black">Enquiries</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admissions.php"><b style="color:black;">Admissions</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../billing.php"><b style="color:black;">Billing/Invoice</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../receipt.php"><b style="color:black;">Receipt</b></a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <b style="color: black;">Reports</b>
                </a>
                <div class="dropdown-menu" style="background: red">
                    <a class="dropdown-item" href="../reports/enquiriesReport.php">Enquiries Report</a>
                    <a class="dropdown-item" href="../reports/admissionReport.php">AdmissionsReport</a>
                    <a class="dropdown-item" href="../reports/invoiceReport.php">Billing/Invoice Report</a>
                    <a class="dropdown-item" href="../reports/receiptReport.php">Receipt Reports</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <b style="color: black;">Staff</b>
                </a>
                <div class="dropdown-menu" style="background: red">
                    <a class="dropdown-item" href="staff_dashboard.php">staff Dashboard</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><b style="color: black">Logout</b></a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="heading2">
    <h4 class="text-center" STYLE="color: white">Inceptor ICT Centre Dashboard</h4>
</div>
</body>
</html>