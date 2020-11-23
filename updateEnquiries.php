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
    $enquiryId = mysqli_real_escape_string($conn,$_POST['enquiryId']);
    $enquiryDate= mysqli_real_escape_string($conn,$_POST['enquiryDate']);
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $telephoneNumber = mysqli_real_escape_string($conn,$_POST['telephoneNumber']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $comments = mysqli_real_escape_string($conn,$_POST['comments']);
    $update = "update enquiries set enquiry_date = '$enquiryDate',first_name = '$firstName',middle_name = '$middleName',last_name = '$lastName',telephone_number = '$telephoneNumber',course = '$course',comments = '$comments'
where enquiry_id = '$enquiryId '";
    if ($conn ->query($update) == true){
        print "<p>Enquiry Details updated successfully</p>";
        print "<a href='enquiries.php' class='btn btn-success'>Update another Enquiry</a>";
    }
    else{
        print "<p>Enquiry Details not updated successfully</p>";
        print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>