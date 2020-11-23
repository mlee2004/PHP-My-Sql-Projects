<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Report</title>
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
    <h3 style="color: white;">Admission Report</h3>
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

    $result = mysqli_query($con,"SELECT * FROM admissions");

    echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>Admission Number</th>
<th>Admission Date</th>
<th>First Name</th>
<th>Middle Name </th>
<th>last Name</th>
<th>Gender</th>
<th>Date Of Birth</th>
<th>Postal Address</th>
<th>Next Of Kin</th>
<th>Relationship</th>
<th>NOK Phone Number</th>
<th>School Attended</th>
<th>Year From</th>
<th>Year To</th>
<th>Maths Grade</th>
<th>English Grade</th>
<th>Overall Grade</th>
<th>Courses</th>
<th>Reason of Choice</th>
<th>How did you know about us ?</th>
</tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['admission_number'] . "</td>";
        echo "<td>" . $row['admission_date'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['middle_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['DOB'] . "</td>";
        echo "<td>" . $row['postal_address'] . "</td>";
        echo "<td>" . $row['next_of_kin'] . "</td>";
        echo "<td>" . $row['relationship'] . "</td>";
        echo "<td>" . $row['NOK_phone_number'] . "</td>";
        echo "<td>" . $row['school_attended'] . "</td>";
        echo "<td>" . $row['year_from'] . "</td>";
        echo "<td>" . $row['year_to'] . "</td>";
        echo "<td>" . $row['maths_grade'] . "</td>";
        echo "<td>" . $row['english_grade'] . "</td>";
        echo "<td>" . $row['overall_grade'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['reason_of_choice'] . "</td>";
        echo "<td>" . $row['HDUKAU'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</div>
</body>
</html>