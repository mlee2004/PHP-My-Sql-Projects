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
    <head><title>New User</title>
        <link rel="icon" href="../images/pageLogo.png">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/custom.css">
        <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <h2 class="text-center text-uppercase text-primary">New User</h2>
        <form action="add_user.php" class="form-group" method="post">
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
                    <td align="right"><label for="onames" class="text-primary"><b>Other Names : </b></label></td>
                    <td><input type="text" name="onames" class="form-control" value="<?php echo $row["other_names"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="desig" class="text-primary"><b>Position : </b></label></td>
                    <td><input type="text" name="desig" class="form-control" value="<?php echo $row["positionj"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="desig" class="text-primary"><b>Department : </b></label></td>
                    <td><input type="text" name="department" class="form-control" value="<?php echo $row["department"];?>"></td>
                </tr>
                <tr>
                    <td align="right"><label for="" class="text-primary"><b>Username : </b></label></td>
                    <td><input type="text" name="username" class="form-control" required></td>
                </tr>
                <tr>
                    <td align="right"><label for="" class="text-primary"><b>Password : </b></label></td>
                    <td><input type="password" name="password" class="form-control" required></td>
                </tr>
                <tr>
                    <td align="right"><label for="" class="text-primary"><b>User Group : </b></label></td>
                    <td>
                        <select name="usergroup" id="usergroup" class="form-control" required>
                            <option value="Systems Administrator">Systems Administrator</option>
                            <option value="Human Resource Manager">Human Resource Manager</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" class="btn btn-primary">Save</button>
                        &nbsp;&nbsp;<a href="search_staff_user.php" class="btn btn-info">Back to Search</a></td>
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