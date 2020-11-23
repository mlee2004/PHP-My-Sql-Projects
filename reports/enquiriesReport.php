<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries Report</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="logo">
    <img src="../images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Enquiries Report</h3>
</div>
<br>
<div class="container report">
    <?php
    $con=mysqli_connect("localhost","root","","inceptordb");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM enquiries");

    echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>Enquiry ID</th>
<th>Enquiry Date</th>
<th>First Name</th>
<th>Middle Name </th>
<th>last Name</th>
<th>Telephone Number</th>
<th>Courses</th>
<th>Comments</th>
</tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['enquiry_id'] . "</td>";
        echo "<td>" . $row['enquiry_date'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['middle_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['telephone_number'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['comments'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</div>
</body>
</html>