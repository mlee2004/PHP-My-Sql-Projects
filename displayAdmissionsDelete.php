<?php
$conn=mysqli_connect("localhost","root","","inceptordb");
if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Removing SQL Injection
$admissionNumber= mysqli_real_escape_string($conn,$_POST['admissionsDelete']);
$sql="SELECT * FROM admissions WHERE admission_number='$admissionNumber'";
//Execute the query in $sql above
$result=$conn->query($sql);
if ($result->num_rows > 0)// If the table books has data
{
while ($row=$result->fetch_assoc())
{
?>
<html>
<head>
    <title>Update Admissions</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Delete Admissions</h3>
</div>
<div class="container">
    <br>
    <form action="deleteAdmissions.php" method="post" class="enquiries">
        <table class="table table-striped">
            <tr>
                <td align="right"><label for="" ><b>Admission Number:</b></label></td>
                <td><input type="number" name="admissionNumber" class="form-control" value="<?php echo $row["admission_number"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for="" ><b>Admission Date :</b></label></td>
                <td><input type="text" name="admissionDate" class="form-control" value="<?php echo $row["admission_date"];?>"></td>
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
                <td align="right"><label for=""><b>Gender :</b></label></td>
                <td><input type="text" name="gender" class="form-control" value="<?php echo $row["gender"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Date Of Birth :</b></label></td>
                <td><input type="date" name="DOB" class="form-control" value="<?php echo $row["DOB"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Postal Address :</b></label></td>
                <td><input type="text" name="postalAddress" class="form-control" value="<?php echo $row["postal_address"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Next of Kin :</b></label></td>
                <td><input type="text" name="nextOfKin" class="form-control" value="<?php echo $row["next_of_kin"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Relationship :</b></label></td>
                <td><input type="text" name="relationship" class="form-control" value="<?php echo $row["relationship"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Next of Kin Phone Number :</b></label></td>
                <td><input type="tel" name="phoneNumber" class="form-control" value="<?php echo $row["NOK_phone_number"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>School Attended :</b></label></td>
                <td><input type="text" name="schoolAttended" class="form-control" value="<?php echo $row["school_attended"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Year From :</b></label></td>
                <td><input type="date" name="yearFrom" class="form-control" value="<?php echo $row["year_from"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Year To :</b></label></td>
                <td><input type="date" name="yearTo" class="form-control" value="<?php echo $row["year_to"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Maths Grade :</b></label></td>
                <td><input type="text" name="MathsGrade" class="form-control" value="<?php echo $row["maths_grade"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>English Grade :</b></label></td>
                <td><input type="text" name="englishGrade" class="form-control" value="<?php echo $row["english_grade"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Overall Grade :</b></label></td>
                <td><input type="text" name="overallGrade" class="form-control" value="<?php echo $row["overall_grade"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Courses :</b></label></td>
                <td><input type="text" name="courses" class="form-control" value="<?php echo $row["course"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>Reason Of Choice :</b></label></td>
                <td><input type="text" name="reasonOfChoice" class="form-control" value="<?php echo $row["reason_of_choice"];?>"></td>
            </tr>
            <tr>
                <td align="right"><label for=""><b>How did you know about us? :</b></label></td>
                <td><input type="text" name="HDYKAU" class="form-control" value="<?php echo $row["HDUKAU"];?>"></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="buttons">
                        <button type="submit" class="btn btn-danger">Delete</button>
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