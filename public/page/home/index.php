<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="../.././css/output.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');
  </style>
</head>

<body class="font-urbanist bg-[#fafafa]">
  <header>
    <?php include_once('./components/header.php'); ?>
  </header>

  <main>
    <?php include_once('./components/hero-section.php'); ?>
    <?php include_once('./components/about.php'); ?>
    <?php include_once('./components/service.php'); ?>
    <?php include_once('./components/produk.php'); ?>
    <?php include_once('./components/testimony.php'); ?>
    <?php include_once('./components/blog.php'); ?>
    <?php include_once('./components/contact.php'); ?>
    <?php include_once('./components/footer.php'); ?>
  </main>

  <script src="../../js/script.js"></script>
</body>

</html>