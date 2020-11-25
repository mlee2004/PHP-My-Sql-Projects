<html>
<head>
    <title>Staff Details</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center" style="color: white">Staff Details</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newStaff.php" method="post">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">First Name :</b></label>
                        </td>
                        <td>
                            <input type="text" name="fname" class="form-control" style="background: darkred; color: white"  required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">Other Names :</b></label>
                        </td>
                        <td>
                            <input type="text" name="onames" class="form-control" style="background: darkred; color: white" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">Position :</b></label>
                        </td>
                        <td>
                            <input type="text" name="position" class="form-control" style="background: darkred; color: white"  required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">Department :</b></label>
                        </td>
                        <td>
                            <select name="department" id="department" class="form-control" style="background: darkred; color: white"  required>
                                <option value="ICT">Software Development</option>
                                <option value="Accounts">Cyber security</option>
                                <option value="Human Resource">Mobile App Management</option>
                                <option value="Marketing">Receptionist</option>
                                <option value="Administration">Administration</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">Join Date :</b></label>
                        </td>
                        <td>
                            <input type="date" name="joindate" class="form-control" style="background: darkred; color: white"  required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b style="color: black">Basic Salary : </b></label>
                        </td>
                        <td>
                            <input type="number" name="bsal" class="form-control" style="background: darkred; color: white"  required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            <a href="staffSearchUpdate.php" class="btn btn-warning">Update</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="staff_search_d.php" class="btn btn-danger">Delete</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="staff_dashboard.php" class="btn btn-dark">Dashboard</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>