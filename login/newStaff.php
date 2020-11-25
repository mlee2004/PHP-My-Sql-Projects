<html>
<head>
    <title>Success</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="container">
    <?php

    $conn = mysqli_connect("localhost", "root", "", "inceptordb");
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    } else {
        $sql = "insert into staff_details(first_name,other_names,positionj,department,join_date,basic_salary)
values ('$_POST[fname]','$_POST[onames]','$_POST[positionj]','$_POST[department]','$_POST[joindate]','$_POST[bsal]')";
        if ($conn->query($sql) == true) {
            print "<p>New staff added successfully</p>";
            print "<a href='staffDetails.php' class='btn btn-primary'>Add New</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        } else {
            print "<p><b style='color: black'>Record not added</b></p>";
            print "<a href='staffDetails.php' class='btn '><b style='color: red'><-Go back</b></a>";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>