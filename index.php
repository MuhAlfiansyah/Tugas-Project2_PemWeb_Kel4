<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ezone</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="header">
    <p>Ezone | Tempatnya Jual Beli</p>
  </div>
  <nav>
    <ul> <?php include("page/navbar.php") ?> </ul>
  </nav>

  <?php include("content.php") ?>

  <?php include("page/user/keranjang.php") ?>
  <div class="footer">
    <p>copyright by | Ezone | Repost by <a href="" target="_blank">Galaxy Developer</a></p>
  </div>

</body>

</html>