<html>
<head>
    <title>Search</title>
    <link rel="icon" href="../images/pageLogo.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../bootstrap/js/popper.js"></script>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Search</h2>
    <form action="staff_display_u.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <td class="text-right">
                    <label for="userId" style="color: black"><b>User ID :</b></label>
                </td>
                <td>
                    <input type="number" class="form-control" name="userId">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button class="btn btn-success" type="submit">Search</button>
                    <a href="index.php" class="btn btn-primary">Login</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>