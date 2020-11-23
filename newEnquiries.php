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
$enquiryId = mysqli_real_escape_string($conn,$_POST['enquiryId']);
$enquiryDate= mysqli_real_escape_string($conn,$_POST['enquiryDate']);
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$telephoneNumber = mysqli_real_escape_string($conn,$_POST['telephoneNumber']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
$comments = mysqli_real_escape_string($conn,$_POST['comments']);
// Adding a new record in the courses table
$addNew = "insert into enquiries(enquiry_id,enquiry_date,first_name,middle_name,last_name,telephone_number,course,comments)
values ('$enquiryId','$enquiryDate','$firstName','$middleName','$lastName','$telephoneNumber','$course','$comments')";
// Executing the query in $addNew above
if ($conn->query($addNew) == true){
    print "<p>New enquiry added successfully</p>";
    print "<a href='enquiries.php' class='btn btn-primary'>Add New Enquiry</a>";
}
else{
    print "<p>Enquiry not added</p>";
    print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
}
// Closing the connection
mysqli_close($conn);
?>
</div>
</body>
</html>