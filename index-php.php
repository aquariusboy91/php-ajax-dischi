<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>PHP Dischi</title>
</head>
<body>
      <!-- header -->
  <?php include_once __DIR__ . '/partials/header.php' ?>

  <main class="main-cont">
    <?php include __DIR__ . '/partials/cards.php'
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>