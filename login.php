<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Web Teknolojileri Projesi</title>

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
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5">

    <section class="d-flex justify-content-center">
        <article class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">

            <h2 class="mb-4 text-center">Giriş Yap</h2>

            <form action="php/loginKontrol.php" method="POST" onsubmit="return loginKontrol()">

                <article class="mb-3">
                    <label for="email" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Öğrenci e-postanızı giriniz">
                </article>

                <article class="mb-3">
                    <label for="sifre" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Şifrenizi giriniz">
                </article>

                <button type="submit" class="btn btn-primary w-100">
                    Giriş Yap
                </button>

            </form>

        </article>
    </section>

</main>

<footer class="bg-dark text-white text-center p-3">
    <p class="mb-0">&copy; 2026 - Web Teknolojileri Projesi</p>
</footer>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>