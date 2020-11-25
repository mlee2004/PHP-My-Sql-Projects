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
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","inceptordb");

    if (!$conn)
    {
        die("Connection Error : " .mysqli_connect_error());
    }
    else{
        $sql="update staff_details set first_name='$_POST[fname]',other_names='$_POST[onames]',
positionj='$_POST[desig]',department='$_POST[department]',join_date='$_POST[jdate]',basic_salary='$_POST[bsal]' where staff_id='$_POST[staffid]'";
print "<br>";
        if($conn->query($sql))
        {
            print "<b>Record updated successfully</b>b";
        }
        else{
            print "Cannot update record";
        }
    }
    mysqli_close($conn);
    ?>
    <br><br>
    <a href="staffDetails.php" class="btn btn-success">Back to Staff details</a>
</div>
</body>
</html>
