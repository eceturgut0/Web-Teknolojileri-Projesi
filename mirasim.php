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

        <h2>Kocaeli’nin Kültürel Mirasından Görseller</h2>

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
                    <img src="img/pertev-pasa.jpg" class="d-block w-100 slider-img" alt="Pertev Paşa Camii">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Pertev Paşa Camii</h3>

                    </div>

                </article>

                
                <article class="carousel-item">
                    
                <a href="#fevziye">
                        <img src="img/fevziye.jpg" class="d-block w-100 slider-img" alt="Fevziye Camii">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Fevziye Camii</h3>

                    </div>

                </article>


                <article class="carousel-item">
                    
                <a href="#saat-kulesi">
                        <img src="img/saat-kulesi.jpeg" class="d-block w-100 slider-img" alt="İzmit Saat Kulesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>İzmit Saat Kulesi</h3>

                    </div>

                </article>
               
                
                <article class="carousel-item">
                    
                <a href="#seka-kagit">
                        <img src="img/seka-kagit.jpeg" class="d-block w-100 slider-img" alt="Seka Kağıt Müzesi">
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Seka Kağıt Müzesi</h3>

                    </div>

                </article>
               
               
                <article class="carousel-item">
                    
                <a href="arkeoloji-muzesi">
                        <img src="img/arkeoloji-muzesi.jpg" class="d-block w-100 slider-img" alt="Kocaeli Arkeoloji Müzesi">
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
                        <img src="img/selim-pasa.jpg" class="d-block w-100 slider-img" alt="Selim Sırrı Paşa Konağı">
                      
                </a>

                    <div class="carousel-caption d-none d-md-block">

                        <h3>Selim Sırrı Paşa Konağı</h3>

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


<section id="kulturel-miras" class="mb-5">

        <h2>Kültürel Miraslar</h2>

        <div class="row mt-4">

            <article id="pertev-pasa" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/pertev-pasa.jpg" class="card-img-top" alt="Pertev Paşa Camii">

                    <div class="card-body">

                        <h3 class="h5">Pertev Paşa Camii</h3>

                        <p>
                       Pertev Paşa Camii, halk arasındaki adıyla Yeni Cuma Camii İzmit’te bulunan önemli tarihi yapılardan biridir. 
                       Osmanlı döneminde Mimar Sinan tarafından inşa edilen cami, mimarisi ve tarihi değeriyle dikkat çekmektedir. 
                       Kesme taş kullanılarak yapılan yapı, uzun yıllardır ibadete açık olarak kullanılmaktadır. 
                       Şehrin kültürel mirasları arasında yer alan Pertev Paşa Camii, hem tarihi hem de manevi açıdan önemli bir yere sahiptir.
                            
                        </p>

                    </div>

                </div>

            </article>

           
            <article id="fevziye" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/fevziye.jpg" class="card-img-top" alt="Fevziye Camii">

                    <div class="card-body">

                        <h3 class="h5">Fevziye Camii</h3>

                        <p>
                        Fevziye Camii, İzmit’in en önemli tarihi ve dini yapılarından biridir. 
                        Osmanlı döneminden günümüze ulaşan cami, mimarisi ve manevi atmosferiyle dikkat çekmektedir. 
                        Geçmişte yaşanan depremler nedeniyle zarar görse de restore edilerek yeniden ibadete açılmıştır. 
                        Şehir merkezinde bulunan Fevziye Camii, hem ibadet etmek hem de tarihi yapıyı görmek isteyen insanların sıkça ziyaret ettiği yerlerden biridir.
                            
                        </p>

                    </div>

                </div>

            </article>

            
            <article id="saat-kulesi" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/saat-kulesi.jpeg" class="card-img-top" alt="İzmit Saat Kulesi">

                    <div class="card-body">

                        <h3 class="h5">İzmit Saat Kulesi</h3>

                        <p>
                        İzmit Saat Kulesi, Kocaeli’nin simgelerinden biri olan tarihi bir yapıdır. 
                        Osmanlı döneminde inşa edilen kule, şehrin önemli tarihi eserleri arasında yer almaktadır. 
                        Deniz manzarasına karşı konumlanan Saat Kulesi, mimarisi ve tarihi görünümüyle dikkat çekmektedir. 
                        Günümüzde hem turistlerin hem de şehir halkının sıkça ziyaret ettiği önemli noktalardan biridir.
                        </p>

                    </div>

                </div>

            </article>

             
            <article id="seka-kagit" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/seka-kagit.jpeg" class="card-img-top" alt="Seka Kağıt Müzesi">

                    <div class="card-body">

                        <h3 class="h5">Seka Kağıt Müzesi</h3>

                        <p>
                        SEKA Kâğıt Müzesi, Kocaeli’nin sanayi ve kültür tarihini yansıtan önemli müzelerden biridir. 
                        Eski SEKA Kâğıt Fabrikası’nın müzeye dönüştürülmesiyle oluşturulan bu yapı, kâğıt üretiminin geçmişten günümüze gelişimini göstermektedir. 
                        Müze içerisinde eski makineler, belgeler ve farklı sergi alanları bulunmaktadır. 
                        Hem eğitici hem de tarihi bir öneme sahip olan SEKA Kâğıt Müzesi, ziyaretçiler tarafından ilgi gören kültürel alanlardan biridir.     
                        </p>

                    </div>

                </div>

            </article>

            
            <article id="arkeoloji-muzesi" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/arkeoloji-muzesi.jpg" class="card-img-top" alt="Kocaeli Arkeoloji Müzesi">

                    <div class="card-body">

                        <h3 class="h5">Kocaeli Arkeoloji Müzesi</h3>

                        <p>
                        Kocaeli Arkeoloji Müzesi, şehrin tarihî geçmişini ve kültürel mirasını tanıtan önemli müzelerden biridir. 
                        Müze içerisinde Roma, Bizans ve Osmanlı dönemlerine ait birçok eser sergilenmektedir. 
                        Tarihî bir yapının restore edilmesiyle oluşturulan müze, hem mimarisi hem de sergilenen eserleriyle dikkat çekmektedir. 
                        Kocaeli’nin geçmişine ışık tutan bu müze, tarih ve arkeolojiye ilgi duyan ziyaretçiler tarafından sıkça tercih edilmektedir.

                        </p>

                    </div>

                </div>

            </article>

            
            <article id="kasri-humayun" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/kasri-humayun.jpg" class="card-img-top" alt="Kasrı Hümayun Saray Müzesi">

                    <div class="card-body">

                        <h3 class="h5">Kasrı Hümayun Saray Müzesi</h3>

                        <p>
                        Kasr-ı Hümayun Saray Müzesi, İzmit’te bulunan ve Osmanlı döneminden günümüze ulaşan önemli tarihî yapılardan biridir. 
                        19. yüzyılda Sultan Abdülaziz döneminde inşa edilen saray, Osmanlı padişahlarının İzmit ziyaretlerinde konaklaması amacıyla kullanılmıştır. 
                        Deniz manzarasına hâkim konumuyla dikkat çeken yapı, zarif mimarisi ve süslemeleriyle Osmanlı saray anlayışını yansıtmaktadır.
                        Sarayın içerisinde döneme ait mobilyalar, süslemeler ve tarihî eserler bulunmaktadır. 
                        Tavan işlemeleri, büyük salonları ve dekoratif detayları yapının estetik değerini artırmaktadır. 
                        Günümüzde müze olarak hizmet veren Kasr-ı Hümayun Saray Müzesi, hem tarihî atmosferi hem de kültürel önemi nedeniyle ziyaretçilerin ilgisini çeken önemli yapılardan biri olarak kabul edilmektedir.
                        </p>

                    </div>

                </div>

            </article>

            
            <article id="mustafa-pasa" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/mustafa-pasa.jpg" class="card-img-top" alt="Çoban Mustafa Paşa Külliyesi">

                    <div class="card-body">

                        <h3 class="h5">Çoban Mustafa Paşa Külliyesi</h3>

                        <p>
                        Çoban Mustafa Paşa Külliyesi, Kocaeli’nin Gebze ilçesinde bulunan Osmanlı dönemine ait önemli tarihî yapılardan biridir. 
                        16. yüzyılda yaptırılan külliye, Osmanlı mimarisinin dikkat çekici eserleri arasında yer almaktadır. 
                        Yapı içerisinde cami, medrese, türbe, hamam, imaret ve kervansaray gibi farklı bölümler bulunmaktadır. 
                        Bu özellikleri sayesinde külliye, geçmişte hem ibadet hem eğitim hem de sosyal yardım amacıyla kullanılan önemli bir merkez olmuştur.
                        Külliyenin en dikkat çeken bölümlerinden biri Çoban Mustafa Paşa Camii’dir. 
                        Taş işçiliği, süslemeleri ve mimari detaylarıyla Osmanlı sanatının güzel örneklerinden biri olarak görülmektedir. 
                        Günümüzde tarihî ve kültürel değeri nedeniyle birçok ziyaretçinin ilgisini çeken külliye, Kocaeli’nin önemli kültürel mirasları arasında yer almaktadır.
                        </p>

                    </div>

                </div>

            </article>

            
            <article id="selim-pasa" class="col-12 mb-4">

                <div class="card h-100">

                    <img src="img/selim-pasa.jpg" class="card-img-top" alt="Selim Sırrı Paşa Konağı">

                    <div class="card-body">

                        <h3 class="h5">Selim Sırrı Paşa Konağı</h3>

                        <p>
                        Selim Sırrı Paşa Konağı, Kocaeli’nin İzmit ilçesinde bulunan önemli tarihî yapılardan biridir. 
                        Osmanlı döneminde 19. yüzyılda inşa edilen konak, dönemin mimari özelliklerini yansıtmaktadır. 
                        Ahşap ağırlıklı yapısıyla dikkat çeken konak; işlemeli tavanları, geniş odaları ve geleneksel dekorasyonuyla geçmişin yaşam tarzını günümüze taşımaktadır.
                        Günümüzde müze olarak kullanılan konakta, Osmanlı dönemine ait eşyalar, mobilyalar ve çeşitli tarihî eserler sergilenmektedir. 
                        Tarihî atmosferi ve kültürel değeri sayesinde hem turistlerin hem de tarih meraklılarının ilgisini çekmektedir. 
                        Selim Sırrı Paşa Konağı, Kocaeli’nin kültürel mirasını koruyan önemli yapılardan biri olarak kabul edilmektedir.
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