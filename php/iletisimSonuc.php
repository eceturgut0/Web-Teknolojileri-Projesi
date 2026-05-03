<?php
function guvenliYaz($veri) {
    return htmlspecialchars(trim($veri), ENT_QUOTES, 'UTF-8');
}

$ad = isset($_POST["ad"]) ? guvenliYaz($_POST["ad"]) : "";
$soyad = isset($_POST["soyad"]) ? guvenliYaz($_POST["soyad"]) : "";
$email = isset($_POST["email"]) ? guvenliYaz($_POST["email"]) : "";
$telefon = isset($_POST["telefon"]) ? guvenliYaz($_POST["telefon"]) : "";
$cinsiyet = isset($_POST["cinsiyet"]) ? guvenliYaz($_POST["cinsiyet"]) : "";
$konu = isset($_POST["konu"]) ? guvenliYaz($_POST["konu"]) : "";
$mesaj = isset($_POST["mesaj"]) ? guvenliYaz($_POST["mesaj"]) : "";
$onay = isset($_POST["onay"]) ? guvenliYaz($_POST["onay"]) : "Onaylanmadı";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu | Web Teknolojileri Projesi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<header>
    <nav class="navbar navbar-dark bg-dark">
        <section class="container">
            <a class="navbar-brand" href="../index.php">Ece Turgut</a>
        </section>
    </nav>
</header>

<main class="container my-5">

    <section class="mb-4">
        <h1>İletişim Formu Sonucu</h1>
        <p>Formdan gönderilen bilgiler aşağıda listelenmiştir.</p>
    </section>

    <section class="card shadow-sm">
        <article class="card-body">

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Ad</th>
                        <td><?php echo $ad; ?></td>
                    </tr>

                    <tr>
                        <th>Soyad</th>
                        <td><?php echo $soyad; ?></td>
                    </tr>

                    <tr>
                        <th>E-posta</th>
                        <td><?php echo $email; ?></td>
                    </tr>

                    <tr>
                        <th>Telefon</th>
                        <td><?php echo $telefon; ?></td>
                    </tr>

                    <tr>
                        <th>Cinsiyet</th>
                        <td><?php echo $cinsiyet; ?></td>
                    </tr>

                    <tr>
                        <th>Konu</th>
                        <td><?php echo $konu; ?></td>
                    </tr>

                    <tr>
                        <th>Mesaj</th>
                        <td><?php echo nl2br($mesaj); ?></td>
                    </tr>

                    <tr>
                        <th>Onay Durumu</th>
                        <td><?php echo $onay; ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="../iletisim.php" class="btn btn-dark">İletişim Sayfasına Dön</a>

        </article>
    </section>

</main>

<footer class="bg-dark text-white text-center p-3">
    <p class="mb-0">&copy; 2026 - Web Teknolojileri Projesi</p>
</footer>

</body>
</html>