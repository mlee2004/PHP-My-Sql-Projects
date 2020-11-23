<?php
$conn=mysqli_connect("localhost","root","","inceptordb");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$enquiry_id= mysqli_real_escape_string($conn,$_POST['enquiriesDelete']);
$sql="SELECT * FROM enquiries WHERE enquiry_id= '$enquiry_id'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table books has data
{
while ($row=$result->fetch_assoc())
{
?>
<html>
<head>
    <title>Enquiry Delete</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Delete Enquiry</h3>
</div>
<div class="container">
    <br>
    <form action="deleteEnquiries.php" method="post" class="enquiries">
        <table class="table table-striped">
            <tr>
                <td align="right"><label for="" ><b>Enquiry ID:</b></label></td>
                <td><input type="text" name="enquiryId" class="form-control" value="<?php echo $row["enquiry_id"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for="" ><b>Enquiry Date :</b></label></td>
                <td><input type="text" name="enquiryDate" class="form-control" value="<?php echo $row["enquiry_date"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for="" ><b>First Name :</b></label></td>
                <td><input type="text" name="firstName" class="form-control" value="<?php echo $row["first_name"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Middle Name :</b></label></td>
                <td><input type="text" name="middleName" class="form-control" value="<?php echo $row["middle_name"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>last Name :</b></label></td>
                <td><input type="text" name="lastName" class="form-control" value="<?php echo $row["last_name"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Telephone Number :</b></label></td>
                <td><input type="tel" name="telephoneNumber" class="form-control" value="<?php echo $row["telephone_number"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Course :</b></label></td>
                <td><input type="text" name="course" class="form-control" value="<?php echo $row["course"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Comments :</b></label></td>
                <td><input type="text" name="comments" class="form-control" value="<?php echo $row["comments"];?>"></td>
            </tr>
                <td colspan="2">
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </td>
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