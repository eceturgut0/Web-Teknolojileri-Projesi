<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım | Web Teknolojileri Projesi</title>

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
                    <li class="nav-item"><a class="nav-link" href="mirasim.php">Mirasım</a></li>
                    <li class="nav-item"><a class="nav-link active" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">

   <section id="hobilerim" class="mb-5">
     <h1>Hobilerim</h1>
     <div class="row mt-4"> 
                    
                 <article class="col-md-6 col-lg-3 mb-4">
                       <div class="card h-100">
                         <div class="card-body">
                            <h3 class="card-title h5">Örgü Örmek</h3>
                            <p class="card-text">
                                İlk kez pandemi döneminde evde bulduğum şiş ve iplerle internet üzerinden örgü örmeyi öğrenmeye başladım. 
                                Bu süreçte örgü örmek bir nebze de olsa zaman geçirmeme yardımcı olurdu. 
                                Şu an kendi atkılarımı , eldivenlerimi ve kazaklarımı örebiliyorum.
                                Sonuçta ortaya çıkan ürünün emeğimin sonucu olduğunu görmek benim için çok kıymetli.
                         </p>
                    </div>
                </div>
            </article>
 

              <article class="col-md-6 col-lg-3 mb-4">
                       <div class="card h-100">
                         <div class="card-body">
                            <h3 class="card-title h5">Ukulele Çalmak</h3>
                            <p class="card-text">
                                Liseye yeni başladığımda okulun gitar kursuna katıldım. Kursta gitar çalmayı öğrendim. 
                                Ama kursu bırakınca yurt ve ev ortamında gitar çalmam zorlaştı ve uzun süre çalmadım. 
                                Bir ay önce hem taşınabilirlik hemde daha yumuşak tınısı sebebiyle ukulele almaya karar verdim.
                                Şu anda öğrenme sürecindeyim.
                         </p>
                    </div>
                </div>
             </article>

             <article class="col-md-6 col-lg-3 mb-4">
                       <div class="card h-100">
                         <div class="card-body">
                            <h3 class="card-title h5">Hikayeler Yazmak</h3>
                            <p class="card-text">
                                Ortaokul ve lisede türkçe dersinde hikaye ve deneme yazma ödevleriyle metinler yazmaya başladım. 
                                Özellikle sınava hazırlandığım süreçte boş zamanlarımda defterime aklımdan geçenleri yazardım.
                                Şimdi de sık sık günlükler tutup parça parça hikayeler yazıyorum.
                                Yazarak zamanı kaydetmek ve seneler sonra dönüp baktığımda o anki duygularımı ve düşüncelerimi görmek benim için çok değerli.
                         </p>
                    </div>
                </div>
            </article>
      
            <article class="col-md-6 col-lg-3 mb-4">
                       <div class="card h-100">
                         <div class="card-body">
                            <h3 class="card-title h5">Çizim Yapmak</h3>
                            <p class="card-text">
                                Küçükken ablam çizimler yapardı, ben de ondan etkilenerek çizdiklerini taklit etmeye başladım. 
                                Zamanla karakalem çizimleri sevdiğimi fark ettim ve o tarz çizimler yapmaya başladım.
                                Bazı çizim teknikleri öğrendikçe geliştim. Vakit buldukça yeni teknikler öğrenip çizimler yapıyorum. 
                                Özellikle günlüklerimi çizimlerimle süsleyerek kişisel defterler tutmaktan keyif alıyorum.
                         </p>
                    </div>
                </div>
            </article>    
          </div>
   </section>
      
   <section id="ilgi-alanlarim">
            <h2>İlgi Alanlarım</h2>
            <div class="row mt-4"> 
           
            <section id="muzik" class="mb-5">
            <h2>Müzik</h2>
            <p class="text-muted">Albümden şarkı görmek için butona tıklayın.</p>
               <div class="row mt-4">
        <article class="col-md-3 mb-4 text-center">

                <img src="img/strange-trails.jpeg" class="img-fluid mb-2">
               
            <button class="btn btn-primary" onclick="sarkiGetir('strange trailslord huron')">
            Strange Trails</button>
            
        </article>

        <article class="col-md-3 mb-4 text-center">

                <img src="img/mayhem.jpeg" class="img-fluid mb-2">
               
            <button class="btn btn-primary" onclick="sarkiGetir('mayhemlady gaga')">
            Mayhem</button>
        
        </article>

        <article class="col-md-3 mb-4 text-center">

            <img src="img/folklore.jpeg" class="img-fluid mb-2">
            
            <button class="btn btn-primary" onclick="sarkiGetir('folklore taylor swift')">
           Folklore</button>
        
        </article>

        <article class="col-md-3 mb-4 text-center">

            <img src="img/brand-new-eyes.jpeg" class="img-fluid mb-2">
           
            <button class="btn btn-primary" onclick="sarkiGetir('brand new eyes paramore')">
            Brand New Eyes</button>

        </article>
    </div>

    <div id="sarkiAlani" class="row mt-4"></div>

</section>



    <section id="kitap" class="mb-5">
        <h2>Kitap</h2>
        <div class="row mt-4">

    <article class="col-md-4 mb-4">
            <div class="card h-100">

        <img src="img/insanciklar.jpg" class="card-img-top">
                <div class="card-body">
        <h3 class="h5">İnsancıklar</h3>

        <p>Yoksul bir memur olan Makar Devuşkin ile genç bir kadın olan Varvara arasındaki mektuplaşmalar üzerinden ilerler. 
            İki karakter de fakirlik ve yalnızlık içinde yaşam mücadelesi verirken birbirlerine duygusal olarak bağlanırlar. 
            Makar, Varvara’ya sevgi ve şefkat duysa da onu koruyacak güce sahip değildir. Varvara ise daha iyi bir hayat umuduyla sevmediği zengin bir adamla evlenmeyi kabul eder. 
            Roman, yoksulluk, toplumsal eşitsizlik ve çaresiz sevgi temalarını işleyerek hüzünlü bir şekilde sona erer.</p>
                </div>
            </div>
    </article>

    <article class="col-md-4 mb-4">
            <div class="card h-100">

        <img src="img/kafamda-bir-tuhaflik.jpg" class="card-img-top">
                <div class="card-body">
        <h3 class="h5">Kafamda Bir Tuhaflık</h3>

        <p>Mevlut Karataş adlı bir bozacının İstanbul’daki yaşamını anlatır. 
           Anadolu’dan İstanbul’a göç eden Mevlut, yıllar boyunca sokaklarda boza satarak hayatını sürdürür. 
           Roman, Mevlut’un aşk hayatı, evliliği ve ailesiyle ilişkileri üzerinden ilerlerken aynı zamanda İstanbul’un zaman içindeki değişimini de gözler önüne serer. 
           Mevlut’un yaşadığı içsel yalnızlık ve hayata karşı duyduğu tuhaflık hissi, eserin temelini oluşturur. 
           Roman, göç, şehirleşme, aşk ve kimlik arayışı temalarını işler.</p>
                </div>
            </div>
    </article>

    <article class="col-md-4 mb-4">
            <div class="card h-100">

        <img src="img/martin-eden.jpg" class="card-img-top">
                <div class="card-body">
        <h3 class="h5">Martin Eden</h3>

        <p>Yoksul bir denizci olan Martin Eden’ın kendini geliştirme ve toplumda yükselme çabasını anlatır. 
            Martin, üst sınıftan Ruth’a âşık olduktan sonra eğitimli ve saygın biri olabilmek için yoğun bir şekilde çalışmaya başlar. 
            Kendi kendini eğiterek yazarlık alanında ilerlemeye çalışan Martin, birçok zorlukla karşılaşır ve uzun süre başarısızlık yaşar. 
            Zamanla eserleri kabul görüp ün kazansa da, bu başarı ona beklediği mutluluğu getirmez. Roman, bireyin toplumla çatışması, sınıf farkı ve hayal kırıklıkları temalarıyla hüzünlü bir şekilde sona erer.</p>
                </div>
            </div>
    </article>
    </div>
</section>



<section id="dizi" class="mb-5">
    <h2>Dizi</h2>
    <div class="row mt-4">
    
    <article class="col-md-4 mb-4">
        <div class="card h-100">
        <img src="img/leyla-ile-mecnun.jpeg" class="card-img-top">
        <div class="card-body">
            
        <h3 class="h5">Leyla ile Mecnun</h3>
            <p> Leyla ve Mecnun’un doğduklarında aynı beşiğe konulmalarıyla başlayan hikâye, 
                yıllar sonra Mecnun’un Leyla’ya âşık olmasıyla farklı bir boyut kazanır. 
                Mecnun, Leyla’ya kavuşabilmek için sürekli çaba gösterirken birbirinden absürt, komik ve zaman zaman duygusal olayların içine sürüklenir. 
                Gerçek ile hayalin iç içe geçtiği dizide aşkın yanı sıra dostluk, aile bağları, sadakat ve hayatın anlamı gibi temalar ön plandadır.
                Alışılmışın dışında anlatımıyla hem güldüren hem de düşündüren bir yapım olarak öne çıkar.
                </p>

            <a href="https://www.trt1.com.tr/diziler/leyla-ile-mecnun/bolum" target="_blank" class="btn btn-primary">
            İzle</a>
         </div>
        </div>
    </article>

    <article class="col-md-4 mb-4">
        <div class="card h-100">
        <img src="img/prens.jpg" class="card-img-top">
        <div class="card-body">

            <h3 class="h5">Prens</h3>
            <p>Hayali bir krallıkta yaşayan ve pek ciddiye alınmayan bir prensin hikâyesini anlatır. 
            Tahtın varisi olmasına rağmen sorumsuz ve umursamaz tavırlarıyla dikkat çeken Prens, saraydaki entrikalar ve olaylar arasında sürekli başını belaya sokar. 
            Zamanla hem sorumluluk almak zorunda kalır hem de çevresindeki insanlarla ilişkileri değişmeye başlar. Dizi, mizahi bir anlatımla güç, sorumluluk ve iktidar konularını eğlenceli bir şekilde işler.
                </p>

            <a href="https://www.hbomax.com/tr/tr/shows/prens-2023/9b669a12-2428-421c-94e7-d295675cc742" target="_blank" class="btn btn-primary">
            İzle</a>
         </div>
        </div>
    </article>
    
    <article class="col-md-4 mb-4">
        <div class="card h-100">
        <img src="img/istanbul.jpeg" class="card-img-top">
        <div class="card-body">

            <h3 class="h5">Ulan İstanbul</h3>
            <p>Dolandırıcılık yaparak geçinen bir grup insanın hikâyesini anlatır. 
               Karlos, Yaren, Derya, Kandemir, Bahadır ve Ferdi gibi karakterlerden oluşan bu ekip, İstanbul’da birlikte yaşayıp çeşitli planlar yaparak insanları dolandırmaya çalışır.
               Ancak işler çoğu zaman planladıkları gibi gitmez ve kendilerini komik ve karmaşık durumların içinde bulurlar.
               Zamanla ekip arasında güçlü bir dostluk bağı oluşur ve sadece para değil, birbirleri için de mücadele etmeye başlarlar. 
               Dizi; suç, dostluk, aşk ve aile gibi temaları eğlenceli ve yer yer duygusal bir şekilde ele alır.
                </p>

            <a href="https://www.kanald.com.tr/ulan-istanbul/bolumler" target="_blank" class="btn btn-primary">
            İzle</a>
          </div>
        </div>
    </article>
</div>  
</section>


 <section id="film" class="mb-5">
    <h2>Film</h2>
        <div class="row mt-4">

    <article class="col-md-4 mb-4">
        <div class="card h-100">

            <img src="img/walter-mitty.jpg" class="card-img-top">

                <div class="card-body">
                    <h3 class="h5">The Secret Life of Walter Mitty</h3>
                    <p>Sıradan ve hayal kurmaya düşkün bir adam olan Walter Mitty’nin hayatını anlatır. 
                      Walter, Life dergisinde çalışan ve monoton bir yaşam süren bir fotoğraf arşivcisidir. 
                      Sürekli hayal dünyasına dalan Walter, kaybolan önemli bir fotoğrafı bulmak için gerçek bir maceraya atılmak zorunda kalır. 
                      Bu süreçte Grönland, İzlanda ve Himalayalar gibi farklı yerlere yolculuk yapar ve korkularıyla yüzleşir. 
                      Walter, bu yolculuk sayesinde kendine olan güvenini kazanır ve hayatını değiştirmeye başlar. 
                      Film, hayallerin peşinden gitme, cesaret ve kendini keşfetme temalarını işler.</p>
                
                    </div>
        </div>
    </article>

    
    <article class="col-md-4 mb-4">
        <div class="card h-100">

            <img src="img/interstellar.jpg" class="card-img-top">

                <div class="card-body">
                    <h3 class="h5">Interstellar</h3>
                    <p>Dünya’nın yaşanmaz hâle gelmeye başladığı bir gelecekte geçer. 
                        Eski bir pilot olan Cooper, insanlık için yeni bir yaşam alanı bulmak amacıyla uzaya gönderilen bir ekibe katılır. 
                        Bir solucan deliği aracılığıyla farklı galaksilere yolculuk yapan ekip, yaşanabilir gezegenler ararken zaman ve uzayın sınırlarını zorlayan zorluklarla karşılaşır. 
                        Cooper, hem insanlığı kurtarma görevi hem de geride bıraktığı kızı Murph ile olan bağı arasında kalır. 
                        Film, bilim, zaman, fedakârlık ve insanlığın hayatta kalma mücadelesi temalarını işler.</p>

                </div>
            </div>
    </article>

        
    <article class="col-md-4 mb-4">
        <div class="card h-100">

            <img src="img/little-women.jpg" class="card-img-top">
            
            <div class="card-body">
            <h3 class="h5">Little Women</h3>
            <p>March ailesinin dört kız kardeşinin hayatını anlatır. 
              Meg, Jo, Beth ve Amy, Amerikan İç Savaşı döneminde büyürken kendi hayallerinin peşinden gitmeye çalışır. 
              Her biri farklı karakterlere ve hedeflere sahip olan kardeşler; aşk, aile ve toplum beklentileri arasında seçimler yapmak zorunda kalır. 
              Özellikle Jo’nun yazar olma isteği ve bağımsızlık arzusu ön plandadır. 
              Film, kardeşlik bağı, fedakârlık, kadınların toplumdaki yeri ve büyüme süreci temalarını işler.</p>

            </div>

        </div>
    </article>

    </div>

  </section>
  </div>
</section>
</main>
<footer class="bg-dark text-white text-center p-3">

    <p>&copy; 2026 - Web Teknolojileri Projesi</p>

</footer>

<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>