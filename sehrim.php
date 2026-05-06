<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim | Web Teknolojileri Projesi</title>

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
                    <li class="nav-item"><a class="nav-link active" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasim.php">Mirasım</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">

    <section id="sehrim" class="mb-5">

        <h1>KOCAELİ</h1>

        <p>
        Kocaeli, Marmara Bölgesi’nde yer alan ve Türkiye’nin en gelişmiş şehirlerinden biri olan önemli bir sanayi ve ticaret merkezidir. 
        İstanbul ile Ankara arasında stratejik bir konumda bulunduğu için ulaşım açısından oldukça avantajlıdır. 
        Şehir, tarih boyunca birçok medeniyete ev sahipliği yapmış ve bu nedenle zengin bir kültürel geçmişe sahip olmuştur. 
        Günümüzde hem ekonomik gücü hem de gelişmiş şehir yapısıyla dikkat çekmektedir.
        </p>

        <p>
        Kocaeli’nin nüfusu yaklaşık 2 milyondur ve bu nüfus her geçen yıl artış göstermektedir. 
        Şehirde sanayi, ticaret ve liman faaliyetleri oldukça gelişmiştir. 
        Türkiye ekonomisine büyük katkı sağlayan Kocaeli, özellikle üretim ve teknoloji alanlarında önemli bir yere sahiptir. 
        Bunun yanında üniversiteleri, sosyal yaşam alanları ve gelişmiş ulaşım ağı sayesinde yaşamak için de tercih edilen şehirlerden biridir.
        </p>

        <p>
        Doğal güzellikleri bakımından oldukça zengin olan Kocaeli, deniz, orman ve dağların bir arada bulunduğu şehirlerden biridir. 
        Temiz havası, yeşil alanları ve doğal yaşamı sayesinde doğa turizmi açısından önemli bir potansiyele sahiptir.
        Şehirde kamp, doğa yürüyüşü, kayak ve deniz turizmi gibi birçok farklı aktivite yapılabilmektedir.    
        </p>

        <p>
          Tarih açısından da köklü bir geçmişe sahip olan Kocaeli, Roma, Bizans ve Osmanlı dönemlerinden izler taşımaktadır. 
          Şehirde bulunan tarihi yapılar ve kültürel miraslar, Kocaeli’nin geçmişten günümüze önemli bir yerleşim merkezi olduğunu göstermektedir. 
          Günümüzde Kocaeli; tarihi, doğası, gelişmiş sanayisi ve sosyal yaşamıyla Türkiye’nin en dikkat çeken şehirlerinden biri olmaya devam etmektedir.  
        </p>

    </section>

    <section id="kocaeli-slider" class="mb-5">

        <h2>Kocaeli’den Görseller</h2>

        <p class="text-muted">Sliderdaki görsellere tıklayarak ilgili yerin açıklamasına gidebilirsiniz.</p>

        <div id="sehrimSlider" class="carousel slide mt-4" data-bs-ride="carousel">

            <div class="carousel-indicators">

                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#sehrimSlider" data-bs-slide-to="7"></button>

            </div>

            <div class="carousel-inner rounded shadow">

                <article class="carousel-item active">
                    <a href="#sekapark">
                        
                    <img src="img/sekapark.jpg" class="d-block w-100 slider-img" alt="Sekapark">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Sekapark</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    <a href="#fuar-alani">

                        <img src="img/fuar-alani.jpg" class="d-block w-100 slider-img" alt="Kocaeli Fuar Alanı">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Kocaeli Fuar Alanı</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    <a href="#kartepe">

                        <img src="img/kartepe.jpg" class="d-block w-100 slider-img" alt="Kartepe Kayak Merkezi">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Kartepe Kayak Merkezi</h3>

                    </div>

                </article>
               
               
                <article class="carousel-item">
                    <a href="#maşukiye">

                        <img src="img/masukiye.jpg" class="d-block w-100 slider-img" alt="Maşukiye">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Maşukiye</h3>

                    </div>

                </article>
               
                
                
                <article class="carousel-item">
                    <a href="#pembe-kayaliklar">

                        <img src="img/pembe-kayaliklar.jpg" class="d-block w-100 slider-img" alt="Pembe Kayalıklar">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Pembe Kayalıklar</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    <a href="#yuvacik-baraji">

                        <img src="img/yuvacik-baraji.jpg" class="d-block w-100 slider-img" alt="Yuvacık Barajı">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Yuvacık Barajı</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    <a href="#kerpe">

                        <img src="img/kerpe.jpg" class="d-block w-100 slider-img" alt="Kerpe">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Kerpe</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    <a href="#karamursel-sahil">

                        <img src="img/karamursel-sahil.jpg" class="d-block w-100 slider-img" alt="Karamürsel Sahil">

                    </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Karamürsel Sahil</h3>

                    </div>

                </article>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#sehrimSlider" data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#sehrimSlider" data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </section>

   
    
    <section id="gezilecek-yerler" class="mb-5">

        <h2>Gezilecek Yerler</h2>

        <div class="row mt-4">

            <article id="sekapark" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/sekapark.jpg" class="card-img-top" alt="Sekapark">

                    <div class="card-body">

                        <h3 class="h5">Sekapark</h3>

                        <p>

                            
                        </p>

                    </div>

                </div>

            </article>

            <article id="fuar-alani" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/fuar-alani.jpg" class="card-img-top" alt="Kocaeli Fuar Alanı">

                    <div class="card-body">

                        <h3 class="h5">Kocaeli Fuar Alanı</h3>

                        <p>

                            
                        </p>

                    </div>

                </div>

            </article>

            <article id="kartepe" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/kartepe.jpg" class="card-img-top" alt="Kartepe Kayak Merkezi">

                    <div class="card-body">

                        <h3 class="h5">Kartepe Kayak Merkezi</h3>

                        <p>

                            

                        </p>

                    </div>

                </div>

            </article>

             <article id="maşukiye" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/masukiye.jpg" class="card-img-top" alt="Maşukiye">

                    <div class="card-body">

                        <h3 class="h5">Maşukiye</h3>

                        <p>

                            
                        </p>

                    </div>

                </div>

            </article>

            <article id="pembe-kayaliklar" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/pembe-kayaliklar.jpg" class="card-img-top" alt="Pembe Kayalıklar">

                    <div class="card-body">

                        <h3 class="h5">Pembe Kayalıklar</h3>

                        <p>

                          

                        </p>

                    </div>

                </div>

            </article>

            <article id="yuvacik-baraji" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/yuvacik-baraji.jpg" class="card-img-top" alt="Yuvacık Barajı">

                    <div class="card-body">

                        <h3 class="h5">Yuvacık Barajı</h3>

                        <p>

                           

                        </p>

                    </div>

                </div>

            </article>

            <article id="kerpe" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/kerpe.jpg" class="card-img-top" alt="Kerpe">

                    <div class="card-body">

                        <h3 class="h5">Kerpe</h3>

                        <p>

                           
                        </p>

                    </div>

                </div>

            </article>

            <article id="karamursel-sahil" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/karamursel-sahil.jpg" class="card-img-top" alt="Karamürsel Sahil">

                    <div class="card-body">

                        <h3 class="h5">Karamürsel Sahil</h3>

                        <p>

                            

                        </p>

                    </div>

                </div>

            </article>

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