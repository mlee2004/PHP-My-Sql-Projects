<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icont" href="images/logo.png">
    <title>Billing Delete</title>
    <link rel="icon" href="images/pageLogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
</head>
<body>
<br>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="100">
</div>
<br>
<div class="heading">
    <h3 style="color: white;">Search Billing ID :</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="displayInvoiceDelete.php" method="post" class="enquiries">
                <br>
                <input type="text" name="invoiceDelete" class="form-control" placeholder="* Search Billing ID" required>
                <div class="buttons">
                    <button type="submit" name="Search" class="btn btn-danger">Search</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>