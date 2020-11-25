<?php
$conn=mysqli_connect("localhost","root","","inceptordb");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM staff_details WHERE staff_id='$_POST[staffid]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <html>
    <head><title>Delete Staff Details</title>
        <link rel="icon" href="../images/pageLogo.png">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/custom.css">
        <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <h2 class="text-center text-uppercase text-primary">Delete Staff Details</h2>
        <form action="staff_delete.php" class="form-group enquiries" method="post">
            <table class="table table-striped">
                <tr>
                    <td align="right"><label for="staffid" class="text-primary"><b>Staff ID : </b></label></td>
                    <td><input type="number" name="staffid" class="form-control" value="<?php echo $row["staff_id"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="fname" class="text-primary"><b>First Name : </b></label></td>
                    <td><input type="text" name="fname" class="form-control" value="<?php echo $row["first_name"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="lname" class="text-primary"><b>Last Name : </b></label></td>
                    <td><input type="text" name="lname" class="form-control" value="<?php echo $row["other_names"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="desig" class="text-primary"><b>Position : </b></label></td>
                    <td><input type="text" name="desig" class="form-control" value="<?php echo $row["positionj"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="desig" class="text-primary"><b>Department : </b></label></td>
                    <td><input type="text" name="desig" class="form-control" value="<?php echo $row["department"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="jdate" class="text-primary"><b>Join Date : </b></label></td>
                    <td><input type="date" name="jdate" class="form-control" value="<?php echo $row["join_date"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="fees_paid" class="text-primary"><b>Basic Salary : </b></label></td>
                    <td><input type="number" name="bsal" class="form-control" value="<?php echo $row["basic_salary"];?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" value="Delete" class="btn btn-danger">Delete Staff Details</button>
                        &nbsp;&nbsp;<a href="staff_search_d.php" class="btn btn-info">Back to Search</a></td>
                </tr>
            </table>
        </form>
    </div>
    </body>
        <?php
    }
}
mysqli_close($conn);
?>