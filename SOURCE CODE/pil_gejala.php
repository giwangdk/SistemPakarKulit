<?php include 'koneksi.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="pakar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">SKIN 101 </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Diagnose</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#news"> News </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                </ul>
            </div>
    </nav>
    <div class="container">
<form class="col-12 " method="POST" action="proses.php">
	<br>
	<br>
	<br>
	<h2 class="py-3 text-center">	Gejala Yang Dialami</h2>
  <div class="">
	<?php
	$qry="select * from tb_gejala_1";
	$data=mysqli_query($kon,$qry);
	while ($d=mysqli_fetch_array($data)) {
	?>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input" value="<?=$d['kode']?>" name="<?=$d['id']?>">
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?=$d['gejala']?>" disabled>
</div>
	<?php
	}
	?>
  </div>
<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="submit">
</form>
</div>
<br>
<footer class="bottom" style="background: #1e252f;color: #fff;">
          <div class="footer-copyright py-3">
            <span>
            <a>
              <em>&copy; Kelompok 8 </em>
            </a>
          </span>
                    
          </div>
  </footer>