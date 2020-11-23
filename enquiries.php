<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiries-Inceptor ICT Centre</title>
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
    <h3 style="color: white;">Enquiries</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newEnquiries.php" method="post" class="enquiries">
                <label for=""><b>Enquiry ID</b></label>
                <input type="text" name="enquiryId" class="form-control" placeholder="* Enquiry ID" required>
                <label for=""><b>Enquiry Date</b></label>
                <input type="date" name="enquiryDate" class="form-control" placeholder="* Enquiry Date" required>
                <label for=""><b>First Name</b></label>
                <input type="text" name="firstName" class="form-control" placeholder="* First Name" required>
                <label for=""><b>Middle Name</b></label>
                <input type="text" name="middleName" class="form-control" placeholder="* Middle Name" required>
                <label for=""><b>Last Name</b></label>
                <input type="text" name="lastName" class="form-control" placeholder="* Last Name" required>
                <label for=""><b>Telephone Number</b></label>
                <input type="tel" name="telephoneNumber" class="form-control" placeholder="* Telephone Number" required>
                <label for=""><b>Course</b></label>
                <input type="text" name="course" class="form-control" placeholder="* Course" required>
                <label for=""><b>Comments</b></label>
                <textarea name="comments" id="" cols="30" rows="10" placeholder="Your Comments" class="form-control" required></textarea>
                <br>
                &nbsp;
                <div class="buttons">
                    <button type="submit" name="save" class="btn btn-success">Save</button>
                    &nbsp;&nbsp;
                    <a href="searchEnquiriesUpdate.php" class="btn btn-primary">Update</a>
                    &nbsp;&nbsp;
                    <a href="searchEnqiriesDelete.php" class="btn btn-danger">Delete</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>