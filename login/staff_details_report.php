<html>
<head>
    <title>Staff Details Report</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<p class="text-center">
    <img src="../images/logo.png" alt="Logo" width="100" height="50">
</p>
<div class="heading">
    <h4 class="text-center">Staff Details Report</h4>
</div>
<div class="container">
    <?php
    $con=mysqli_connect("localhost","root","","inceptordb");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM staff_details");

    echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>Staff ID</th>
<th>First Name</th>
<th>Other Names</th>
<th>Position</th>
<th>Department</th>
<th>Join Date</th>
<th>Basic Salary</th>
</tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['staff_id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['other_names'] . "</td>";
        echo "<td>" . $row['positionj'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td>" . $row['join_date'] . "</td>";
        echo "<td>" . $row['basic_salary'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</div>
<p class="text-center">
    <a href="staff_dashboard.php" class="btn btn-primary">Dashboard</a>
</p>
</body>
</html>