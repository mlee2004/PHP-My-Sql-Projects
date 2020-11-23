<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admissions-Inceptor ICT Centre</title>
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
    <h3 style="color: white;">Admissions</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newAdmissions.php" method="post" class="enquiries">
<!--                <label for=""><b>Admission Number :</b></label>-->
<!--                <input type="number" name="admissionNumber" class="form-control" placeholder="* Enquiry ID" required>-->
                <label for=""><b>Admission Date :</b></label>
                <input type="date" name="admissionDate" class="form-control" placeholder="* Enquiry Date" required>
                <label for=""><b>First Name :</b></label>
                <input type="text" name="firstName" class="form-control" placeholder="* First Name" required>
                <label for=""><b>Middle Name :</b></label>
                <input type="text" name="middleName" class="form-control" placeholder="* Middle Name" required>
                <label for=""><b>Last Name :</b></label>
                <input type="text" name="lastName" class="form-control" placeholder="* Last Name" required>
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;<b style="color: white">Male</b>
                <input type="radio" name="gender" value="Female" required>&nbsp;<b style="color: white">Female</b>
                <br>
                <label for=""><b>Date Of Birth :</b></label>
                <input type="date" name="DOB" class="form-control" required>
                <label for=""><b>Postal Address :</b></label>
                <input type="text" name="postalAddress" class="form-control" placeholder="* Enter Postal Address" required>
                <label for=""><b>Next of Kin :</b></label>
                <input type="text" name="nextOfKin" class="form-control" placeholder="* Enter Next Of Kin Name(s)" required>
                <label for=""><b>Relationship :</b></label>
                <input type="text" name="relationship" class="form-control" placeholder="* Relationship Between you and Next of Kin" required>
                <label for=""><b>Next of Kin Phone Number</b></label>
                <input type="tel" name="phoneNumber" class="form-control" placeholder="* Next of Kin Phone Number" required>
                <label for=""><b>School Attended</b></label>
                <input type="text" name="schoolAttended" class="form-control" placeholder="* School Attended" required>
                <label for=""><b>Year From :</b></label>
                <input type="date" name="yearFrom" class="form-control" required>
                <label for=""><b>Year To :</b></label>
                <input type="date" name="yearTo" class="form-control" required>
                <label for=""><b>Maths Grade :</b></label>
                <input type="text" name="MathsGrade" class="form-control" placeholder="* Enter Maths Grade" required>
                <label for=""><b>English Grade :</b></label>
                <input type="text" name="englishGrade" class="form-control" placeholder="* Enter English Grade" required>
                <label for=""><b>Overall Grade :</b></label>
                <input type="text" name="overallGrade" class="form-control" placeholder="* Enter Overall Grade" required>
                <label for=""><b>Courses :</b></label>
                <input type="text" name="courses" class="form-control" placeholder="* Enter Course" required>
                <label for=""><b>Reason Of Choice :</b></label>
                <textarea name="reasonOfChoice" id="" cols="20" rows="5" class="form-control" placeholder=" * Type Your Reason Here" required></textarea>
                <label for=""><b>How did you know about us?</b></label>
                <br>
                <select name="HDYKAU" id=""  style="background: lightcyan; color: red" required>
                    <option value="Walk-in Enquiry" style="background: darkred; color: white">Walk-in Enquiry</option>
                    <hr color="white">
                    <option value="Social Media" style="background: darkred; color: white">Social Media</option>
                    <option value="Student" style="background: darkred; color: white">Student</option>
                    <option value="Sign Board" style="background: darkred; color: white">Sign Board</option>
                    <option value="Friend" style="background: darkred; color: white">Friend</option>
                    <option value="TV/Radio" style="background: darkred; color: white">TV/Radio</option>
                    <option value="Marketing/Sales Staff" style="background: darkred; color: white">Marketing/Sales Staff</option>
                    <option value="Friend" style="background: darkred; color: white">Others</option>
                </select>
                &nbsp;
                <div class="buttons">
                    <button type="submit" name="save" class="btn btn-success">Save</button>
                    &nbsp;&nbsp;
                    <a href="searchAdmissionsUpdate.php" class="btn btn-primary">Update</a>
                    &nbsp;&nbsp;
                    <a href="searchAdmissionsDelete.php" class="btn btn-danger">Delete</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>