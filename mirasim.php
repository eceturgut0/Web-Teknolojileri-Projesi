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
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="mirasim.php">Mirasım</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmişim</a></li>
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
                       Pertev Paşa Camii, diğer adıyla Yeni Cuma Camii, İzmit’te bulunan önemli Osmanlı eserlerinden biridir. 
                       16. yüzyılda Osmanlı vezirlerinden Pertev Mehmet Paşa tarafından yaptırılan cami, ünlü Osmanlı mimarı Mimar Sinan’ın eserleri arasında yer almaktadır. 
                       Kesme taş kullanılarak inşa edilen yapı, sade fakat etkileyici mimarisiyle dikkat çekmektedir.
                       Caminin geniş kubbesi, kemerli yapıları ve ince işçilikle yapılan detayları Osmanlı mimarisinin özelliklerini yansıtmaktadır. 
                       Uzun yıllardır ibadete açık olan Pertev Paşa Camii, hem tarihî hem de manevi açıdan önemli bir yere sahiptir. 
                       Şehir merkezinde bulunması nedeniyle yerli ve yabancı ziyaretçiler tarafından sıkça ziyaret edilen yapılar arasında yer almaktadır.
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
                        Fevziye Camii, İzmit’in en önemli tarihî ve dini yapılarından biridir. 
                        Osmanlı döneminde inşa edilen cami, mimarisi ve manevi atmosferiyle şehrin dikkat çeken eserleri arasında yer almaktadır. 
                        Geçmişte yaşanan büyük depremler nedeniyle zarar görmüş olsa da restore edilerek yeniden ibadete açılmıştır. 
                        Günümüzde hem ibadet amacıyla hem de tarihî yapıyı görmek isteyen ziyaretçiler tarafından sıkça ziyaret edilmektedir.
                        Caminin mimarisinde Osmanlı dönemine ait estetik detaylar dikkat çekmektedir. 
                        Geniş iç yapısı, kubbeleri ve zarif minaresi yapının görkemli görünmesini sağlamaktadır. 
                        Şehir merkezinde bulunan Fevziye Camii, Kocaeli’nin kültürel ve tarihî mirasını yansıtan önemli eserlerden biri olarak kabul edilmektedir.
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
                       İzmit Saat Kulesi, Kocaeli’nin simgelerinden biri olan önemli tarihî yapılardan biridir. 
                       Osmanlı döneminde Sultan II. Abdülhamid’in tahta çıkışının anısına yaptırılan kule, 1901 yılında inşa edilmiştir. 
                       İzmit’te yüksek bir konumda bulunan yapı, hem şehir manzarası hem de deniz görünümüyle dikkat çekmektedir. 
                       Tarihî yapısı sayesinde Kocaeli’nin en çok ziyaret edilen turistik noktalarından biri hâline gelmiştir.
                       Saat Kulesi, taş mimarisi ve zarif tasarımıyla Osmanlı dönemi mimarisinin güzel örneklerinden biri olarak görülmektedir. 
                       Dört katlı yapıya sahip olan kule, ince detaylarla süslenmiş olup estetik görünümüyle dikkat çekmektedir. 
                       Günümüzde hem turistlerin hem de şehir halkının sıkça ziyaret ettiği bu yapı, Kocaeli’nin tarihî ve kültürel mirasını yansıtan önemli eserlerden biridir.
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
                        Türkiye’nin ilk kâğıt fabrikalarından biri olan SEKA Kâğıt Fabrikası’nın müzeye dönüştürülmesiyle oluşturulan bu yapı, geçmişte uzun yıllar boyunca kâğıt üretimi yapılan önemli bir sanayi merkezi olmuştur. 
                        Fabrikanın tarihî yapısı korunarak müze hâline getirilmiş ve ziyaretçilere açılmıştır.
                        Müze içerisinde eski kâğıt üretim makineleri, tarihî belgeler, fotoğraflar ve çeşitli sergi alanları bulunmaktadır. 
                        Ziyaretçiler burada kâğıdın üretim aşamalarını öğrenebilmekte ve fabrikanın geçmişteki çalışma sistemini yakından inceleyebilmektedir. 
                        Hem eğitici hem de kültürel bir öneme sahip olan SEKA Kâğıt Müzesi, Kocaeli’nin tarihî mirasını yansıtan önemli yapılardan biri olarak görülmektedir.
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
                        Müze, tarihî bir yapının restore edilmesiyle oluşturulmuş ve ziyaretçilere açılmıştır. 
                        İçerisinde Roma, Bizans ve Osmanlı dönemlerine ait birçok arkeolojik eser sergilenmektedir. 
                        Bu eserler sayesinde Kocaeli’nin geçmişten günümüze uzanan tarihî gelişimi hakkında bilgi edinmek mümkündür.
                        Müzede eski heykeller, mezar taşları, seramikler, sikkeler ve çeşitli tarihî objeler bulunmaktadır. 
                        Sergilenen eserler, geçmiş dönemlerde bölgede yaşayan insanların kültürü ve yaşam tarzı hakkında önemli bilgiler vermektedir. 
                        Tarihî atmosferi ve zengin koleksiyonuyla dikkat çeken Kocaeli Arkeoloji Müzesi, tarih ve arkeolojiye ilgi duyan ziyaretçiler tarafından sıkça tercih edilen kültürel alanlardan biridir.
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