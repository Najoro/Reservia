<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./dist/css/all.css">
  <link rel="stylesheet" href="./dist/css/all.min.css">
  <link rel="stylesheet" href="./dist/css/index.css">
</head>

<body>

  <!-- HEADER -->
  <header class="header">
    <a href=".?controler=Reservia&action=index">
    <img class="Img" src="./dist/images/images/logo/Reservia.svg" alt="Reservia" />
    </a>
    <nav class="Nav">
      <a class="NavLink" href="?controler=Reservia&action=index#hosting" data-active="true">Hébergement</a>
      <a class="NavLink" href="?controler=Reservia&action=index#activity" data-active="false">Activités</a>
    </nav>
    <?php if(!($_SESSION['user'])) : ?>
      <a class="Signup" href="?controler=Auth&action=login">Se Connecter</a>
    <?php else: ?>
      <a class="Signup" href="?controler=Auth&action=user">
        <div class="icone">
          <i class="far fa-user"></i>
        </div>
    </a>
    <?php endif; ?>
  </header>
  <!-- END HEADER -->

  <!-- MAIN -->
  <main class="main">
    <!-- search -->
