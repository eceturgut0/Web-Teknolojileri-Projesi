<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Web Teknolojileri Projesi</title>

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
                    <li class="nav-item"><a class="nav-link active" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container my-5" id="iletisimUygulamasi">

    <section class="mb-4">
        <h1>İletişim</h1>
        <p>Benimle iletişime geçmek için aşağıdaki formu doldurabilirsiniz.</p>
    </section>

    <section class="card shadow-sm">
        <article class="card-body">

            <form id="iletisimFormu" action="php/iletisimSonuc.php" method="POST">

                <section class="row">
                    <article class="col-md-6 mb-3">
                        <label for="ad" class="form-label">Adınız</label>
                        <input type="text" class="form-control" id="ad" name="ad" v-model="form.ad">
                    </article>

                    <article class="col-md-6 mb-3">
                        <label for="soyad" class="form-label">Soyadınız</label>
                        <input type="text" class="form-control" id="soyad" name="soyad" v-model="form.soyad">
                    </article>
                </section>

                <section class="row">
                    <article class="col-md-6 mb-3">
                        <label for="email" class="form-label">E-posta</label>
                        <input type="email" class="form-control" id="email" name="email" v-model="form.email">
                    </article>

                    <article class="col-md-6 mb-3">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input type="tel" class="form-control" id="telefon" name="telefon" v-model="form.telefon">
                    </article>
                </section>

                <section class="mb-3">
                    <p class="form-label mb-1">Cinsiyet</p>

                    <article class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="kadin" name="cinsiyet" value="Kadın" v-model="form.cinsiyet">
                        <label class="form-check-label" for="kadin">Kadın</label>
                    </article>

                    <article class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="erkek" name="cinsiyet" value="Erkek" v-model="form.cinsiyet">
                        <label class="form-check-label" for="erkek">Erkek</label>
                    </article>

                    <article class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="belirtmekIstemiyorum" name="cinsiyet" value="Belirtmek istemiyorum" v-model="form.cinsiyet">
                        <label class="form-check-label" for="belirtmekIstemiyorum">Belirtmek istemiyorum</label>
                    </article>
                </section>

                <article class="mb-3">
                    <label for="konu" class="form-label">Konu</label>
                    <select class="form-select" id="konu" name="konu" v-model="form.konu">
                        <option value="">Konu seçiniz</option>
                        <option value="Öneri">Öneri</option>
                        <option value="Şikayet">Şikayet</option>
                        <option value="Bilgi">Bilgi</option>
                        <option value="Diğer">Diğer</option>
                    </select>
                </article>

                <article class="mb-3">
                    <label for="mesaj" class="form-label">Mesajınız</label>
                    <textarea class="form-control" id="mesaj" name="mesaj" rows="5" v-model="form.mesaj"></textarea>
                </article>

                <article class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="onay" name="onay" value="Onaylandı" v-model="form.onay">
                    <label class="form-check-label" for="onay">
                        Bilgilerimin gönderilmesini kabul ediyorum.
                    </label>
                </article>

                <section class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" onclick="jsKontrolEt()">
                        JavaScript ile Kontrol Et
                    </button>

                    <button type="button" class="btn btn-success" @click="vueKontrolEt">
                        Vue.js ile Kontrol Et
                    </button>

                    <button type="reset" class="btn btn-secondary">
                        Temizle
                    </button>
                </section>

            </form>

        </article>
    </section>

</main>

<footer class="bg-dark text-white text-center p-3">
    <p class="mb-0">&copy; 2026 - Web Teknolojileri Projesi</p>
</footer>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>