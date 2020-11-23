<?php
$conn=mysqli_connect("localhost","root","","inceptordb");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$receipt_number= mysqli_real_escape_string($conn,$_POST['receiptUpdate']);
$sql="SELECT * FROM receipt WHERE receipt_number='$receipt_number'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table receipt has data
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
<a href="receipt.php" class="btn"><b>Receipt Page</b></a>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Update Receipt</h3>
</div>
<div class="container">
    <br>
    <form action="updateReceipt.php" method="post" class="enquiries">
        <table class="table table-striped">
            <tr>
                <td align="right"><label for="" ><b>Receipt Number :</b></label></td>
                <td><input type="text" name="receiptNumber" class="form-control" value="<?php echo $row["receipt_number"];?>"></td>
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
                <td align="right"><label for="" ><b>Receipt Date :</b></label></td>
                <td><input type="text" name="receiptDate" class="form-control" value="<?php echo $row["receipt_date"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Course :</b></label></td>
                <td><input type="text" name="course" class="form-control" value="<?php echo $row["course"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Amount Paid :</b></label></td>
                <td><input type="text" name="amountPaid" class="form-control" value="<?php echo $row["amount_paid"];?>"></td>
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