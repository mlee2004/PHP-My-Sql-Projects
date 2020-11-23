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
    $admissionNumber = mysqli_real_escape_string($conn,$_POST['admissionNumber']);
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
    $update = "update admissions set admission_date= '$admissionDate',first_name = '$firstName',middle_name = '$middleName',last_name = '$lastName',gender = '$gender',DOB = '$DOB',postal_address = '$postalAddress',next_of_kin ='$nextOfKin',relationship ='$relationship',NOK_phone_number ='$phoneNumber',school_attended ='$schoolAttended',year_from ='$yearFrom',year_to ='$yearTo',maths_grade ='$mathsGrade',english_grade ='$englishGrade',overall_grade ='$overallGrade',course ='$course',reason_of_choice ='$reasonOfChoice',HDUKAU ='$HDUKAU'
where admission_number = '$admissionNumber '";
    if ($conn ->query($update) == true){
        print "<p>Admission Details updated successfully</p>";
        print "<a href='admissions.php' class='btn btn-success'>Update another Admission details</a>";
    }
    else{
        print "<p>Admission Details not updated successfully</p>";
        print "<a href='admissions.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>