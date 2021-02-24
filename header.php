<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<?php $koneksi = new mysqli("localhost","root","","sampingin");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    

    <title>SAMPINGIN</title>
  </head>
  <body>
    <style>
 .navbar-expand-lg  {
    background-color:#008080;
    font-size:15px;
    }
    .nav-link:hover {
  background-color:#B0E0E6; 
}
 .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        body{
        background: #FFDEAD;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        -background-size:cover;
        }
        body> .container{
          margin-top: 90px;
        }
</style>
<nav class="navbar navbar-expand-lg navbar-dark">
 <img src="admin/assets/img/banner.png    "width="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active ">
              <a class="nav-link" href="tentang.php">Tentang Kami<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="kerja.php">Pekerjaan<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav mr-5">
        <a class="navbar-brand  font-weight-bold font-italic mr-5" >SELAMAT DATANG PENCARI KERJA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </ul>

      <ul class="navbar-nav ml-auto ml-3">
        <li class="nav-item active ">
              <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
            </li>
             <!-- jika sudah login-->
             <?php if(isset($_SESSION["pelanggan"])): ?>
             <li class="icon mt-2">
                <a class="text-white" href="profil.php"><i class="fas fa-user ml-2 mr-2"data-toggle="tooltip"title="profile"></i></a>
              </li>
<li class="icon mt-2"> 
                <a class="text-white" href="logout.php"><i class="fas fa-sign-out-alt ml-2 mr-2"data-toggle="tooltip"title="logout"></i></a>
              </li>
           <!-- selain itu blm login-->
            <?php else: ?>
          <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item active ">
              <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
            </li>
             <?php endif ?>
        </ul>

 
   </div>
 
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript"src="script.js"></script>

