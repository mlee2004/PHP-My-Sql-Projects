<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inceptordb");
    if (!$conn) {
        die("Connection Error : " . mysqli_connect_error());
    }
    $billingId = mysqli_real_escape_string($conn,$_POST['billingId']);
    $billingDate= mysqli_real_escape_string($conn,$_POST['billingDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $amountToPay = mysqli_real_escape_string($conn,$_POST['amountToPay']);
    $delete = "delete from invoice where billing_id ='$billingId'";
    if ($conn ->query($delete) == true){
        print "<p>Billing Details deleted successfully</p>";
        print "<a href='billing.php' class='btn btn-success'>Delete another Invoice</a>";
    }
    else{
        print "<p>Invoice Details not Deleted</p>";
        print "<a href='billing.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>