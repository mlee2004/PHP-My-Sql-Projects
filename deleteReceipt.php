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
    $receiptNumber = mysqli_real_escape_string($conn,$_POST['receiptNumber']);
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $receiptDate= mysqli_real_escape_string($conn,$_POST['receiptDate']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $amountPaid = mysqli_real_escape_string($conn,$_POST['amountPaid']);
    $delete = "delete from receipt where receipt_number ='$receiptNumber'";
    if ($conn ->query($delete) == true){
        print "<p>Receipt Details deleted successfully</p>";
        print "<a href='receipt.php' class='btn btn-success'>Delete another Receipt</a>";
    }
    else{
        print "<p>Receipt Details not Deleted</p>";
        print "<a href='billing.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>