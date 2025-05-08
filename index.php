<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/css-reset.css?v=<?php echo time() ?>" />
  <link rel="stylesheet" href="./assets/css/header.css?v=<?php echo time() ?>" />
</head>

<body>
  <div class="overlay"></div>
  <header class="medpro-header">
    <?php include_once 'components/header.php'; ?>
  </header>

  <main>
    <?php
    $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 'home';

    switch ($page) {
      case "home":
        include_once 'view/home/home.php';
        break;
      case "about":
        include_once 'view/about/about.php';
        break;
      default:
        include_once 'view/home/home.php';
        break;
    }
    ?>

  </main>

  <footer></footer>
</body>

</html>