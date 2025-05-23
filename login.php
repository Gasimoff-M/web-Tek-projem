<?php
// Formdan gelen kullanıcı adı ve şifre
$kullanici_adi = $_POST["username"] ?? "";
$sifre = $_POST["password"] ?? "";

// Geçerli kullanıcı
$dogru_kullanici = "b241210568@ogr.sakarya.edu.tr";
$dogru_sifre = "b241210568";

// Eşleşiyorsa hoşgeldiniz mesajı göster
if ($kullanici_adi === $dogru_kullanici && $sifre === $dogru_sifre) {
    $ogrenci_no = explode("@", $kullanici_adi)[0];
    echo "<h2 style='text-align:center; margin-top: 50px;'>Hoşgeldiniz <span style='color:green;'>$ogrenci_no</span></h2>";
} else {
    // Başarısızsa tekrar login sayfasına yönlendir
    echo "<script>
        alert('Giriş bilgileri hatalı. Lütfen tekrar deneyin.');
        window.location.href = 'login.html';
    </script>";
}
?>
