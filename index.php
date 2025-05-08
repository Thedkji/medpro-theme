<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/css-reset.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
</head>

<body>
  <?php
  $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 'home';
  $url = "http://localhost/medpro-theme/";
  ?>
  
  <header class="medpro-header">
    <?php include_once 'components/header.php'; ?>
  </header>

  <main>
    <?php
    switch ($page) {
      case "home":
        include_once 'view/home/home.php';
        break;
      case "business-health-check":
        include_once 'view/business-health-check/index.php';
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