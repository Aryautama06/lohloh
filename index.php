<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Mr.Sue">

      <title>Eid Mubarak Blog | PBWL Project7</title>
      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/delitekno.png" class="brand">
                  <div class="user">Suendri</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Category
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Post
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pel_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Pelanggan
                              </a>
                        </li>
                  </ul>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mr. Sue
            </footer>
      </main>

</body>

</html>