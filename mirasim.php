<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasım | Web Teknolojileri Projesi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Ece Turgut</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="mirasim.php">Mirasım</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<main class="container my-5">
<section id="kocaeli-slider" class="mb-5">

        <h2>Kocaeli’den Görseller</h2>

        <p class="text-muted">Sliderdaki görsellere tıklayarak ilgili yerin açıklamasına gidebilirsiniz.</p>

        <div id="mirasimSlider" class="carousel slide mt-4" data-bs-ride="carousel">

            <div class="carousel-indicators">

                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#mirasimSlider" data-bs-slide-to="7"></button>

            </div>

<div class="carousel-inner rounded shadow">

                <article class="carousel-item active">
                    
                <a href="#pertev-pasa">  
                    <img src="img/pertev-pasa.jpeg" class="d-block w-100 slider-img" alt="Pertev Paşa Camii">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Pertev Paşa Camii</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    
                <a href="#fevziye">
                        <img src="img/fevziye.jpeg" class="d-block w-100 slider-img" alt="Fevziye Camii">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Fevziye Camii</h3>

                    </div>

                </article>


                <article class="carousel-item">
                    
                <a href="#saat-kulesi">
                        <img src="img/saat-kulesi.jpg" class="d-block w-100 slider-img" alt="İzmit Saat Kulesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>İzmit Saat Kulesi</h3>

                    </div>

                </article>
               
                
                <article class="carousel-item">
                    
                <a href="#seka-kagıt">
                        <img src="img/seka-kagıt.jpg" class="d-block w-100 slider-img" alt="Seka Kağıt Müzesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Seka Kağıt Müzesi</h3>

                    </div>

                </article>
               
               
                <article class="carousel-item">
                    
                <a href="arkeoloji-müzesi">
                        <img src="img/arkeoloji-müzesi.jpg" class="d-block w-100 slider-img" alt="Kocaeli Arkeoloji Müzesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Kocaeli Arkeoloji Müzesi</h3>

                    </div>

                </article>
               
                
                <article class="carousel-item">
                    
                <a href="#kasri-humayun">
                        <img src="img/kasri-humayun.jpg" class="d-block w-100 slider-img" alt="Kasrı Hümayun Saray Müzesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Kasrı Hümayun Saray Müzesi</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    
                <a href="#mustafa-pasa">
                        <img src="img/mustafa-pasa.jpg" class="d-block w-100 slider-img" alt="Çoban Mustafa Paşa Külliyesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Çoban Mustafa Paşa Külliyesi</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    
                <a href="#selim-pasa">
                        <img src="img/selim-pasa.jpg" class="d-block w-100 slider-img" alt="Selim Sırri Paşa Konağı">
                      
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Selim Sırri Paşa Konağı</h3>

                    </div>

                </article>

            </div>

            
            <button class="carousel-control-prev" type="button" data-bs-target="#mirasimSlider" data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mirasimSlider" data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>


        </div>

    </section>








</main>


<footer class="bg-dark text-white text-center p-3">

    <p class="mb-0">&copy; 2026 - Web Teknolojileri Projesi</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/script.js"></script>

</body>

</html>