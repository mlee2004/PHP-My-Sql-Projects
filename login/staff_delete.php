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
<br>
<body>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","inceptordb");

    if (!$conn)
    {
        die("Connection Error : " .mysqli_connect_error());
    }
    else{
        $sql="delete from staff_details where staff_id='$_POST[staffid]'";

        if($conn->query($sql))
        {
            print "Record deleted successfully";
        }
        else{
            print "Cannot delete record";
        }
    }
    mysqli_close($conn);
    ?>
    <br><br>
    <a href="staffDetails.php" class="btn btn-info">Back to Staff details</a>
</div>
</body>
</html>