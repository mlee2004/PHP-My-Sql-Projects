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
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$receiptDate= mysqli_real_escape_string($conn,$_POST['receiptDate']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
$amountPaid= mysqli_real_escape_string($conn,$_POST['amountPaid']);
// Adding a new record in the courses table
$addNew = "insert into receipt(first_name,middle_name,last_name,receipt_date,course,amount_paid)
values ('$firstName','$middleName','$lastName','$receiptDate','$course','$amountPaid')";
// Executing the query in $addNew above
if ($conn->query($addNew) == true){
    print "<p>New Receipt added successfully</p>";
    print "<a href='receipt.php' class='btn btn-primary'>Add New receipt</a>";
}
else{
    print "<p>Receipt not added</p>";
    print "<a href='receipt.php' class='btn btn-danger'>Try Again</a>";
}
// Closing the connection
mysqli_close($conn);
?>
</div>
</body>
</html>