<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda | Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Proje Ödevi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        
        <section id="hakkimda" class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4">Merhaba, Ben Ece TURGUT</h1>
                    <p class="lead">Sakarya Üniversitesi Bilgisayar Mühendisliği Öğrencisiyim. </p>
                    <p>
                        Bu sayfa, Web Teknolojileri dersi proje ödevi kapsamında 
                        hazırlanmıştır ve benim hakkımda temel bilgileri içermektedir. 
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/profil.jpg" alt="Profil Fotoğrafı" class="img-fluid rounded-circle shadow">
                </div>
            </div>
        </section>

        <section id="detaylar" class="py-5 bg-light rounded">
            <div class="container">
                <div class="row">
                    <article class="col-md-6">
                        <h3>Hobilerim ve Etkinlikler</h3>
                        <ul class="list-group">
                            <li class="list-group-item">Örgü Örmek</li>
                            <li class="list-group-item">Hikayeler Yazmak</li>
                            <li class="list-group-item">Ukulele Çalmak</li>
                             <li class="list-group-item">Kitap Okumak</li>
                        </ul>
                    </article>
               </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2026 - Web Teknolojileri Projesi </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>