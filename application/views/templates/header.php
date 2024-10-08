<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/images/im.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark bg-success text-dark">
    <div class="container">
        <nav class="navbar navbar-light bg-success">
            <a class="navbar-brand" href="<?php echo base_url()?>">
                <img src="assets/images/im.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>Game</strong>🎮
            </a>
        </nav>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Anggota')?>">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('tes')?>">jangan di tekan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Optional JavaScript -->