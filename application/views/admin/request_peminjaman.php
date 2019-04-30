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
    <title>Admin Panel</title>
</head>
<body>

    <div class="admin-container row">
        <div class="navigation col-2">
            <div class="profile">
                <img class="img-profile" src="<?php echo base_url("/assets/img/");?>profile_pict.png" alt="User">
                <h5>Agus Supriadi</h5>
            </div>
            <div class="navigation-menu">
                <a class="navigation-link click" href="">
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_request.png">
                    Request
                </a>
                <a class="navigation-link" href="">
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_time.png">
                    On Going
                </a>
                <a class="navigation-link" href="">
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_calendar.png">
                    History
                </a>
            </div>
        </div>
        <div class="main-panel col">
            <h3>List Request Peminjaman</h3>
            <div class="list-peminjaman">
                <div class="header-list">
                </div>
                <!-- item list request peminjaman -->

                <div class="list-item-container row">
                    <div class="col-1">
                        <div class="list-number">
                            <p>1</p>
                        </div>
                    </div>
                    <div class="col">
                        <p class="nama">Muh. Hatta Eka Putra</p>
                        <small class="company">Bukalapak</small>
                    </div>
                    <div class="col text-center">
                        <p>Office Space</p>
                    </div>
                    <div class="col text-center">
                        <p class="m-0 p-0">20 Agustus 2019</p>
                        <p class="m-0 p-0">21 Agustus 2019</p>
                    </div>
                    <div class="col-1 text-center">
                        <img class="ic-people" src="<?php echo base_url("/assets/img/");?>ic_people.png">
                        50
                    </div>
                    <div class="col-2 text-right">
                        <button class="btn btn-custom">DETAIL</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>