<!DOCTYPE html>
<html lang="en">

<head>

    <!-- configuration for all page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,600,700" rel="stylesheet">
    <!-- configuration for all page -->

    <link rel="stylesheet" href="<?php echo base_url("/assets/css/");?>style.css">
    <title>Detail Ruangan</title>

</head>

<body>

    <?php $this->load->view('user/navbar'); ?>
    <h2 class="text-center detail-ru">Detail Ruangan</h2>
    <div class="row item-container">
        <?php foreach ($data_ke_view as $data): ?>
        <div class="col">
            <img src="<?php echo base_url("/assets/img/");?><?php echo $data["foto"];?>.jpg" alt="Working Space" class="img-fluid">
        </div>
        <div class="col">
            <h3><?php echo $data["nama"];?></h3>
            <div class="item-rating">
                <img src="<?php echo base_url("/assets/img/");?>star-fill.png">
                <img src="<?php echo base_url("/assets/img/");?>star-fill.png">
                <img src="<?php echo base_url("/assets/img/");?>star-fill.png">
                <img src="<?php echo base_url("/assets/img/");?>star-fill.png">
                <img src="<?php echo base_url("/assets/img/");?>star-border.png">
            </div>
            <p class="mt-2"><?php echo $data["deskripsi"];?></p>
            <div class="item-feature">
                <img src="<?php echo base_url("/assets/img/");?>users.png">
                Max. <?php echo $data["kapasitas"]; ?> People
            </div>
            <div class="item-feature">
                <img src="<?php echo base_url("/assets/img/");?>wifi.png">
                <?php echo $data["fitur1"]; ?>
            </div>
            <div class="item-feature">
                <img src="<?php echo base_url("/assets/img/");?>placeholder.png">
                <?php echo $data["fitur2"]; ?>
            </div>
            <div class="item">
                <h2><b>Rp <?php echo $data["harga"]; ?></b></h2>
            </div>
            <a href="<?php echo site_url('controller_utama/form_view/'.$data["id"]);?>"><button>SEWA SEKARANG</button></a>
        </div>
        <?php endforeach;?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url("/assets/js/");?>script.js"></script>
</body>

</html>