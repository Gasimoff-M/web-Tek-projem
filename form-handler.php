<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
  function guvenli($key) {
    return htmlspecialchars($_GET[$key] ?? "-", ENT_QUOTES, 'UTF-8');
  }
  $branşlar = isset($_GET['branş']) ? (array)$_GET['branş'] : [];
  $branşList = count($branşlar) ? implode(", ", array_map('htmlspecialchars', $branşlar)) : "-";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonucu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .info-box {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      margin-top: 50px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body class="bg-light">
  <div class="container">
    <div class="info-box">
      <h2 class="text-center">Gönderilen Form Bilgileri</h2>
      <ul class="list-group">
        <li class="list-group-item"><strong>Ad Soyad:</strong> <?= guvenli("ad") ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= guvenli("email") ?></li>
        <li class="list-group-item"><strong>Telefon:</strong> <?= guvenli("telefon") ?></li>
        <li class="list-group-item"><strong>Cinsiyet:</strong> <?= guvenli("cinsiyet") ?></li>
        <li class="list-group-item"><strong>Branşlar:</strong> <?= $branşList ?></li>
        <li class="list-group-item"><strong>Şehir:</strong> <?= guvenli("sehir") ?></li>
        <li class="list-group-item"><strong>Mesaj:</strong><br><?= nl2br(guvenli("mesaj")) ?></li>
      </ul>
    </div>
  </div>
</body>
</html>
