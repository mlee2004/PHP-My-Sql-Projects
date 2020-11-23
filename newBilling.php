<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <?php
$conn = mysqli_connect("localhost","root","","inceptordb");
if (!$conn){
    die("Connection Error : " .mysqli_connect_error());
}
// Removing SQL Injections
$billingId = mysqli_real_escape_string($conn,$_POST['billingId']);
$billingDate= mysqli_real_escape_string($conn,$_POST['billingDate']);
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
$amountToPay = mysqli_real_escape_string($conn,$_POST['amountToPay']);
// Adding a new record in the courses table
$addNew = "insert into invoice(billing_id,billing_date,first_name,middle_name,last_name,course,amount_to_pay)
values ('$billingId','$billingDate','$firstName','$middleName','$lastName','$course','$amountToPay')";
// Executing the query in $addNew above
if ($conn->query($addNew) == true){
    print "<p>New Invoice added successfully</p>";
    print "<a href='billing.php' class='btn btn-primary'>Add New Invoice</a>";
}
else{
    print "<p>Invoice not added</p>";
    print "<a href='billing.php' class='btn btn-danger'>Try Again</a>";
}
// Closing the connection
mysqli_close($conn);
?>
</div>
</body>
</html>