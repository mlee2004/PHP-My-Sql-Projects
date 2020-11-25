<html>
<head>
    <title>Login</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<p class="logo">
    <img src="../images/logo.png" alt="Logo" width="200" height="100">
</p>
<div class="">
    <h2 class="heading" style="color: white">Inceptor ICT Center</h2>
</div>
<div class="enquiries ">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <table class="table table-striped table-responsive-sm enquiries">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Username :</b></label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form-control" required>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td class="text-right">
                            <label for="">Password : </label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""> Group : </label>
                        </td>
                        <td>
                            <select name="usergroup" id="usergroup" class="form-control" required>
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Human Resource Manager">Human Resource Manager</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="user_search.php" class="btn btn-dark">Register</a>
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

<?php
session_start();

if (isset($_POST['submit'])) {
    include 'db_connect.php';

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $usergroup = mysqli_real_escape_string($db,$_POST['usergroup']);

    $qry = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_group='$usergroup'");
    $row = mysqli_fetch_array($qry, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if ($count == 1) {

        if (!empty($username) && !empty($password) && !empty($usergroup == 'Systems Administrator')) {
            header("LOCATION:sysadmin_dashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Human Resource Manager')) {
            header("LOCATION:hrman_dashboard.php");
        } else if (!empty($username) && !empty($password) && !empty($usergroup == 'Staff')) {
            header("LOCATION:staff_dashboard.php");
        }

    } else {
        header("LOCATION:login_error.php");
    }
}
?>