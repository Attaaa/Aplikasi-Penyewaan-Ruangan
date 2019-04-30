<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Style Css -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/");?>style.css">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/");?>admin.css">
    <title>Login Admin</title>
</head>
<body>

    <div class="login-container">
        <h2>Login Admin</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" class="form-control" id="uname">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass">
            </div>
            <button class="btn btn-custom btn-login w-100" type="submit" value="login">LOGIN</button>
        </form>
    </div>

<body>
</html>