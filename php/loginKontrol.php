<?php

$dogruNo = "b251210085";
$dogruMail = $dogruNo . "@sakarya.edu.tr";


$email = isset($_POST["email"]) ? strtolower(trim($_POST["email"])) : "";
$sifre = isset($_POST["sifre"]) ? strtolower(trim($_POST["sifre"])) : "";


if ($email === $dogruMail && $sifre === $dogruNo) {
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Başarılı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<main class="container my-5">

    <section class="alert alert-success text-center">
        <h1>Hoşgeldiniz <?php echo htmlspecialchars($dogruNo); ?></h1>
        <p>Giriş işlemi başarılı.</p>
        <a href="../index.php" class="btn btn-dark mt-3">Ana Sayfaya Dön</a>
    </section>

</main>

</body>
</html>

<?php
} else {
    
    header("Location: ../login.php");
    exit();
}
?>