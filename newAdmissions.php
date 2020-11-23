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
//$admissionNumber = mysqli_real_escape_string($conn,$_POST['admissionNumber']);
$admissionDate= mysqli_real_escape_string($conn,$_POST['admissionDate']);
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$middleName = mysqli_real_escape_string($conn,$_POST['middleName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$DOB = mysqli_real_escape_string($conn,$_POST['DOB']);
$postalAddress = mysqli_real_escape_string($conn,$_POST['postalAddress']);
$nextOfKin = mysqli_real_escape_string($conn,$_POST['nextOfKin']);
$relationship = mysqli_real_escape_string($conn,$_POST['relationship']);
$phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
$schoolAttended = mysqli_real_escape_string($conn,$_POST['schoolAttended']);
$yearFrom = mysqli_real_escape_string($conn,$_POST['yearFrom']);
$yearTo = mysqli_real_escape_string($conn,$_POST['yearTo']);
$mathsGrade = mysqli_real_escape_string($conn,$_POST['MathsGrade']);
$englishGrade = mysqli_real_escape_string($conn,$_POST['englishGrade']);
$overallGrade = mysqli_real_escape_string($conn,$_POST['overallGrade']);
$course = mysqli_real_escape_string($conn,$_POST['courses']);
$reasonOfChoice = mysqli_real_escape_string($conn,$_POST['reasonOfChoice']);
$HDUKAU = mysqli_real_escape_string($conn,$_POST['HDYKAU']);
// Adding a new record in the courses table
$addNew = "insert into admissions(admission_date,first_name,middle_name,last_name,gender,DOB,postal_address,next_of_kin,relationship,NOK_phone_number,school_attended,year_from,year_to,maths_grade,english_grade,overall_grade,course,reason_of_choice,HDUKAU)
values ('$admissionDate','$firstName','$middleName','$lastName','$gender','$DOB','$postalAddress','$nextOfKin','$relationship','$phoneNumber','$schoolAttended','$yearFrom','$yearTo','$mathsGrade','$englishGrade','$overallGrade','$course','$reasonOfChoice','$HDUKAU')";
// Executing the query in $addNew above
if ($conn->query($addNew) == true){
    print "<p>New Admission added successfully</p>";
    print "<a href='admissions.php' class='btn btn-primary'>Create New Admission</a>";
}
else{
    print "<p>Enquiry not added</p>";
    print "<a href='admissions.php' class='btn btn-danger'>Try Again</a>";
}
// Closing the connection
mysqli_close($conn);
?>
</div>
</body>
</html>