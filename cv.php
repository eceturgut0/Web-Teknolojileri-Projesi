<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmişim | Web Teknolojileri Projesi</title>

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
                    <li class="nav-item"><a class="nav-link active" href="cv.php">Özgeçmişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasim.php">Mirasım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<main class="container my-5">

    <section id="cv-baslik" class="text-center mb-4">
            <h1>Özgeçmişim</h1>
    </section>

    <section id="cv-icerik" class="mb-5">
        <div class="row">

            <aside class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">

                        <img src="img/profil.jpeg" alt="Profil Fotoğrafı" class="img-fluid rounded-circle mb-3 cv-profil">

                        <h2 class="h4 w-100 text-center mt-2">Ece Turgut</h2>

                        <p>Bilgisayar Mühendisliği Öğrencisi</p>

                        <hr>

                        <h3 class="h5">Kişisel Bilgiler</h3>

                        <p><strong>Şehir:</strong> Kocaeli</p>
                        <p><strong>Üniversite:</strong> Sakarya Üniversitesi</p>
                        <p><strong>Bölüm:</strong> Bilgisayar Mühendisliği</p>

                        <hr>
                        
                        <h3 class="h5">İletişim</h3>
                           <p><strong>E-posta:</strong> eceturgut06@gmail.com</p>

                        <hr>
                    </div>
                </div>
            </aside>

            <section class="col-md-8">

                <article class="card mb-4">
                    <div class="card-body">

                        <h2 class="h4">Eğitim Bilgileri</h2>

                        <section class="mb-4">
                            <p><strong>Sakarya Üniversitesi</strong></p>
                            <p>Bilgisayar Mühendisliği</p>
                            <p>2025 - Devam Ediyor</p>

                            <p>
                                Bilgisayar mühendisliği alanında temel programlama, web teknolojileri ve yazılım geliştirme konularında kendimi geliştirmeye çalışıyorum.
                            </p>

                        </section>

                        <section class="mb-4">
                            <p><strong>Mehmet Akif Ersoy Anadolu Lisesi</strong></p>
                            <p>Sayısal</p>
                            <p>2019 - 2024</p>

                            <p>
                                Lise eğitimimi sayısal alan üzerine tamamladım. Ayrıca hazırlık sınıfında eğitim alarak İngilizce seviyemi geliştirme fırsatı buldum.
                            </p>  
                        </section>
                    </div>
                </article>
        </section>
                <article class="card mb-4">
                    <div class="card-body">

                        <h2 class="h4 mb-3">Yeteneklerim</h2>
                            <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary p-2">HTML5</span>
                        <span class="badge bg-primary p-2">CSS3</span>
                        <span class="badge bg-primary p-2">Javascript</span>
                        <span class="badge bg-primary p-2">PHP</span>
                        <span class="badge bg-primary p-2">C#</span>
                        <span class="badge bg-primary p-2">C++</span>
                             </div>
                    </div>
                </article>

                <article class="card mb-4">
                    <div class="card-body">

                        <h2 class="h4">Diller</h2>

                        <p><strong>Türkçe:</strong> Ana dil</p>
                        <p><strong>İngilizce:</strong> Intermediate (B1) </p>

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