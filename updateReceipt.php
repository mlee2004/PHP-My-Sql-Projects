<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
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
    $conn=mysqli_connect("localhost","root","","inceptordb");
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
    $update = "update receipt set first_name = '$firstName',middle_name = '$middleName',last_name = '$lastName',receipt_date = '$receiptDate',course = '$course',amount_paid = '$amountPaid'
where receipt_number = 'receiptNumber '";
    if ($conn ->query($update) == true){
        print "<p>Receipt Details updated successfully</p>";
        print "<a href='receipt.php' class='btn btn-success'>Update another Receipt</a>";
    }
    else{
        print "<p>Receipt Details not updated successfully</p>";
        print "<a href='receipt.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>