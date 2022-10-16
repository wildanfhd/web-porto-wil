<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="../style.css?php echo time(); ?>">

    <title>Tools</title>
</head>
<body>
    <?php
        require_once "../controllers/header.php";
    ?>
    
    <!-- ======= Services Section ======= -->
  <section id="tools" class="tools py-5" style="margin-top: 50px;">
    <div class="container">

      <div class="section-title mt-5 mt-md-0">
            <img src="https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051a81b30ad8d3_Icon%201.svg" class="mb-3" alt="">
            <?php
                  include "../controllers/koneksi.php";

                  $querySQL = "SELECT * FROM tools";
                  $execQuerySQL = mysqli_query($koneksi, $querySQL);

                  if(mysqli_num_rows($execQuerySQL) > 0) {
                      while($row = mysqli_fetch_assoc($execQuerySQL)) {
            ?>
            <h3 class="text-uppercase fw-bold"><?= $row['heading'] ?></h3>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/carbon-copy/48/000000/visual-studio-code-2019.png"/></div>
            <h4><a href="">Visual Studio Code</a></h4>
            <p><?= $row['desc1']?></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/ios-filled/48/000000/javascript.png"/></div>
            <h4><a href="">JavaScript</a></h4>
            <p><?= $row['desc2']?></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/ios/48/000000/java-coffee-cup-logo--v1.png"/></div>
            <h4><a href="">Java</a></h4>
            <p><?= $row['desc3']?></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/ios-filled/48/000000/php-logo.png"/></div>
            <h4><a href="">PHP</a></h4>
            <p><?= $row['desc4']?></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/48/000000/external-bootstrap-a-free-and-open-source-css-framework-logo-bold-tal-revivo.png"/></div>
            <h4><a href="">Bootstrap</a></h4>
            <p><?= $row['desc5']?></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><img src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/48/000000/external-nodejs-is-an-open-source-cross-platform-javascript-run-time-environment-logo-bold-tal-revivo.png"/></i></div>
            <h4><a href="">Node JS</a></h4>
            <p><?= $row['desc6']?></p>
            <?php
                    }
                }
            ?>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End tools Section -->


    <?php
        require_once "../controllers/footer-alt.php";
    ?>
    
</body>
</html>