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
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_request_black.png">
                    Request
                </a>
                <a class="navigation-link" href="">
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_time_white.png">
                    On Going
                </a>
                <a class="navigation-link" href="">
                    <img class="navigation-icon" src="<?php echo base_url("/assets/img/");?>ic_calendar_white.png">
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
                    <div class="col text-center list-date">
                        <p class="m-0 p-0">20 Agustus 2019</p>
                        <p class="m-0 p-0">21 Agustus 2019</p>
                    </div>
                    <div class="col-1 text-center">
                        <img class="ic-people" src="<?php echo base_url("/assets/img/");?>ic_people.png">
                        50
                    </div>
                    <div class="col-2 text-right">
                        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#modalDetail">DETAIL</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">Nama</label>
                        <input type="text" class="form-control" id="uname">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom">Accept</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>