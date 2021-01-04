<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pakar.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;500;600&display=swap" rel="stylesheet">
    <title>SISTEM PAKAR KULIT</title>
</head>
<body>
    <!--NAVBAR-->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SKIN 101 </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pil_gejala.php">Diagnose</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#news"> News </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                </ul>
            </div>
    </nav>
    <div id="content">
        <div class="row">
            <!--Jumbotron Judul Tugas-->
            <div  class="jumbotron jumbotron-fluid col-lg-12">
                <h1 class="display-5 pt-5">SISTEM PAKAR DIAGNOSIS PENYAKIT KULIT</h1>
                <h2 class="pt-2">Menggunakan Metode Forward Chaining</h2>
                <p class="lead"></p>
                <hr class="my-4">
                <p>Sistem pakar berbasis web disusun oleh Kelompok 8 </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn ">   <a href="pil_gejala.php">Get Started!</a> </button>
                </div>
            </div>
        </div>

    </div>

<!--Halaman Utama Tentang Penyakit Kulit-->
    <div id="home">
    <div class="container-fluid px-0">
            <div class="tentang-penyakit1">
                <div class="row">
                    <div class="col-6  text-center justify-content p-5 align-items-center">
                        <h3>TENTANG PENYAKIT KULIT</h3>
                        <p class="lead"> Penyakit kulit merupakan suatu penyakit yang menyerang pada permukaan tubuh, dan d
                            isebabkan oleh berbagai macam penyebab. Penyakit kulit adalah penyakit 
                            infeksi yang paling umum, terjadi pada orang-orang dari segala usia.</p>
                    </div>
                    <div class="col-6">
                        <img class="mainimg " src="assets/images/gejala4.jpg" alt="" srcset="">
                    </div>
                    </div>
            </div>
            
            <div class="tentang-penyakit2 py-5">
                
            <div class="row px-0">
                <div class="col-6">
                    <div class="col-6">
                        <img class="mainimg  " src="assets/images/sehat.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-6  text-center justify-content p-5 align-items-center">
                    <h3>Pentingnya Menjaga Kesehatan Kulit !</h3>
                    <p class="lead"> Mengabaikan gangguan kesehatan kulit sekecil apapun dapat 
                        mengakibatkan gangguan kesehatan yang lebih serius. 
                        Kesehatan kulit yang terganggu juga dapat membuat Anda merasa tidak percaya diri. 
                        Lagipula, siapa yang tidak ingin memiliki kulit yang sehat? 
                         </p>
                </div>
                
                </div>
                </div>
        </div>
        <div id="news">
            <div class="data-penyakit pt-5">
                <div class="container">
                <h1>Kenali Gejala Penyakit Kulit dan Penyembuhannya </h1>
                    <div class="row pt-3">
                        <div class="col-4">
                            <div class="card">
                                <img src="assets/images/eksim.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">EKSIM</h5>
                                  <p class="card-text">Penyakit eksim kering merupakan gangguan pada kulit yang ditandai dengan kulit kering, gatal, dan munculnya ruam merah. </p>
                                  <a href="#" class="btn btn-primary">Baca</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="assets/images/psoriasis.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">PSORIASIS</h5>
                                  <p class="card-text">Psoriasis adalah peradangan pada kulit yang ditandai dengan ruam merah, kulit kering, tebal, bersisik, dan mudah terkelupas.</p>
                                  <a href="#" class="btn btn-primary">Baca</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="assets/images/jerawat.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">JERAWAT</h5>
                                  <p class="card-text">Jerawat adalah masalah kulit yang terjadi ketika folikel rambut atau tempat tumbuhnya rambut tersumbat oleh minyak dan sel kulit mati..</p>
                                  <a href="#" class="btn btn-primary">Baca</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
        
        
        
        

    </div>

    <div id="diagonsis">

    </div>
    





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>