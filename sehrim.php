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
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmişim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasim.php">Mirasım</a></li>
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

    <section id="şehrim-slider" class="mb-5">

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

            </div>

            <div class="carousel-inner rounded shadow">

                <article class="carousel-item active">
                    
                <a href="#sekapark">  
                    <img src="img/sekapark.jpeg" class="d-block w-100 slider-img" alt="Sekapark">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Sekapark</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    
                <a href="#fuar-alani">
                        <img src="img/fuar-alani.jpeg" class="d-block w-100 slider-img" alt="Kocaeli Fuar Alanı">
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
                    
                <a href="#ormanya">
                        <img src="img/ormanya.jpg" class="d-block w-100 slider-img" alt="Ormanya Tabiat Parkı">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Ormanya Tabiat Parkı</h3>

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
                    
                <a href="#kapanca">
                        <img src="img/kapanca.jpg" class="d-block w-100 slider-img" alt="Tarihi Kapanca Sokak">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Tarihi Kapanca Sokak</h3>

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

                    <img src="img/sekapark.jpeg" class="card-img-top" alt="Sekapark">

                    <div class="card-body">

                        <h3 class="h5">Sekapark</h3>

                        <p>
                        Sekapark, Kocaeli’nin en önemli sosyal ve yaşam alanlarından biridir.
                        İzmit Körfezi kıyısında bulunan bu alan, eski bir sanayi bölgesinin düzenlenmesiyle oluşturulmuştur. 
                        Geniş yeşil alanları, yürüyüş ve bisiklet yolları sayesinde hem şehir halkının hem de turistlerin sıkça ziyaret ettiği bir yerdir. 
                        Doğa ile denizin bir arada bulunduğu Sekapark, dinlenmek ve vakit geçirmek için Kocaeli’nin en popüler noktalarından biri olarak görülmektedir.
                            
                        </p>

                    </div>

                </div>

            </article>

           
            <article id="fuar-alani" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/fuar-alani.jpeg" class="card-img-top" alt="Kocaeli Fuar Alanı">

                    <div class="card-body">

                        <h3 class="h5">Kocaeli Fuar Alanı</h3>

                        <p>
                         Kocaeli Fuar Alanı, şehrin en önemli etkinlik ve sosyal yaşam merkezlerinden biridir. 
                         Yıl boyunca konserler, festivaller, fuarlar ve çeşitli kültürel etkinliklere ev sahipliği yapmaktadır. 
                         Geniş yeşil alanları, yürüyüş yolları ve eğlence alanları sayesinde insanların vakit geçirmek için sıkça tercih ettiği yerlerden biridir. 
                         Özellikle yaz aylarında düzenlenen etkinliklerle Kocaeli’nin sosyal hayatına canlılık katmaktadır.
                            
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
                        Kartepe Kayak Merkezi, Kocaeli’nin en önemli turizm bölgelerinden biridir. 
                        Özellikle kış aylarında yoğun ilgi gören merkez, doğal güzellikleri ve kar manzarasıyla dikkat çekmektedir. 
                        Kayak ve snowboard gibi kış sporları için uygun alanlara sahip olan Kartepe, hem profesyonel sporcular hem de tatil yapmak isteyen ziyaretçiler tarafından tercih edilmektedir. 
                        Temiz havası, ormanlık yapısı ve doğayla iç içe ortamı sayesinde yılın farklı dönemlerinde de ziyaret edilen önemli bir turizm merkezidir.
                        </p>

                    </div>

                </div>

            </article>

             
            <article id="ormanya" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/ormanya.jpg" class="card-img-top" alt="Ormanya">

                    <div class="card-body">

                        <h3 class="h5">Ormanya Tabiat Parkı</h3>

                        <p>
                        Ormanya Tabiat Parkı, Kocaeli’nin doğal güzellikleriyle öne çıkan önemli turizm alanlarından biridir. 
                        Geniş ormanlık alanları, yürüyüş yolları ve doğal yaşam ortamıyla ziyaretçilere doğayla iç içe bir deneyim sunmaktadır. 
                        Park içerisinde çeşitli hayvan türleri bulunmakta ve doğal yaşam korunmaktadır. 
                        Temiz havası ve sakin atmosferi sayesinde hem dinlenmek hem de doğa etkinlikleri yapmak isteyen insanların sıkça tercih ettiği yerlerden biridir. Özellikle aileler ve doğa severler için Kocaeli’nin en dikkat çeken alanlarından biri olarak görülmektedir.
                            
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
                        Pembe Kayalıklar, Kocaeli’nin doğal güzellikleri arasında yer alan dikkat çekici bir bölgedir. 
                        Adını gün batımında pembe renge dönüşen kayalarından alan bu yer, özellikle doğal manzarasıyla ziyaretçilerin ilgisini çekmektedir. 
                        Deniz kıyısında bulunan kayalıklar, temiz havası ve sakin ortamıyla doğayla vakit geçirmek isteyenler için güzel bir alan oluşturmaktadır. 
                        Fotoğraf çekmek, manzara izlemek ve doğanın tadını çıkarmak isteyen insanların sıkça ziyaret ettiği turistik noktalardan biridir.
                          

                        </p>

                    </div>

                </div>

            </article>

            
            
            <article id="kapanca" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/kapanca.jpg" class="card-img-top" alt="Tarihi Kapanca Sokak">

                    <div class="card-body">

                        <h3 class="h5">Tarihi Kapanca Sokak</h3>

                        <p>
                        Kapanca Sokak, İzmit’in en bilinen tarihi sokaklarından biridir. 
                        Osmanlı döneminden kalma tarihi evleri, dar taş yolları ve nostaljik atmosferiyle dikkat çeker. 
                        Restore edilen renkli evler sayesinde hem turistlerin hem de fotoğraf çekmek isteyen insanların sıkça ziyaret ettiği yerlerden biridir. 
                        Kocaeli’nin tarihi dokusunu yansıtan önemli alanlardan biri olarak görülmektedir.
                           
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