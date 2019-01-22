<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- menyambungkan css -->
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/style.css">
    <!-- menyambungkan js -->
    <script type="text/javascript" src="<?=base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url() ?>assets/js/bootstrap.js"></script>
  </head>
  <body>
    <!-- MENU -->
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
        <a class="navbar-brand" href="#">LOELITA'S</a>
    </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active "><a href="<?=base_url()?>index.php/Dashboard">HOME</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>

      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>index.php/Dashboard/kontak">Contact</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/destinasi">Destination</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/galeri">Gallery</a></li>
        <li><a href="<?=base_url()?>index.php/Dashboard/pesan">Booking</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url()?>index.php/Dashboard/sigin">Sign In</a></li>
            <!-- <li><a href="#">Register</a></li>
            <li><a href="#">Logout</a></li> -->
            <li class="divider"></li>
            <li><a href="<?=base_url()?>index.php/Dashboard/register">Register</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="dashboard">
  <!-- BERISI tampilan yang akan berubah, misal untuk tampilan home, dll -->

<!-- untuk meng include file dari v_dasboard yang berisi tampilan dashboard -->
<?php
$this->load->view($konten); //diberi variable agar menjadi dinamis. tidak bolek dikasih petik
 ?>

</div>

    <!-- FOOTER -->
    <div class="row">
      <div class="col-md-12" style="background:#D7DBDD; ">

        <div class="text" style="margin:30px">

          <h4>Loelita Alifia Amanda Putri</h4>
          <h4>XIR6 / 23</h4>
          <h5 class="text-center">Copyright 2018/2019  | Loelita</h5>
        </div>

      </div>
    </div>

<!-- MODAL tetapi tidak saya tambahkan -->
    <div id="tampil-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Apakah anda mau keluar ?</h4>
      </div>
      <div class="modal-body">
        <p>Pastikan anda sudah selesai&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tidak</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  </body>
</html>
