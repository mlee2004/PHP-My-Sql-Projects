<?php
$conn=mysqli_connect("localhost","root","","inceptordb");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$billing_id= mysqli_real_escape_string($conn,$_POST['invoiceUpdate']);
$sql="SELECT * FROM invoice WHERE billing_id='$billing_id'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table books has data
{
while ($row=$result->fetch_assoc())
{
?>
<html>
<head>
    <title>Update Billing</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<a href="searchInvoiceUpdate.php" class="btn"><b>Previous Page</b></a>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Update Invoice</h3>
</div>
<div class="container">
    <br>
    <form action="updateInvoice.php" method="post" class="enquiries">
        <table class="table table-striped">
            <tr>
                <td align="right"><label for="" ><b>Billing ID :</b></label></td>
                <td><input type="text" name="billingId" class="form-control" value="<?php echo $row["billing_id"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for="" ><b>Enquiry Date :</b></label></td>
                <td><input type="text" name="billingDate" class="form-control" value="<?php echo $row["billing_date"];?>"></td>
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
                <td align="right"><label for=""><b>Course :</b></label></td>
                <td><input type="text" name="course" class="form-control" value="<?php echo $row["course"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Amount to Pay :</b></label></td>
                <td><input type="text" name="amountToPay" class="form-control" value="<?php echo $row["amount_to_pay"];?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="buttons">
                        <button type="submit" class="btn btn-success">Update</button>
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