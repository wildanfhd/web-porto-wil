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
    <title>Contact Me</title>
</head>
<body>
    <?php
        require_once "../controllers/header.php";
        include "../controllers/koneksi.php";

        if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message'])) {
          $senderName = $_POST['name'];
          $senderEmail = $_POST['email'];
          $senderSub = $_POST['subject'];
          $senderMsg = $_POST['message'];
          $querySQL = "INSERT INTO contact(nama, email, subjek, pesan) VALUES('$senderName', '$senderEmail', '$senderSub', '$senderMsg')";
          $execSQL = mysqli_query($koneksi, $querySQL);
          if($execSQL) {
            header('Location: contact.php?sent=1');
        } else {
            header('Location: contact.php?sent=0');
        }
        }
    ?>

          

<main id="main">

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact py-5" style="margin-top: 50px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title mt-5 mt-md-0">
                <img src="https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051a81b30ad8d3_Icon%201.svg" class="mb-3" alt="">
                <h3 class="text-uppercase fw-bold">Contact</h3>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=Serua&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
    </div>
          <!-- Konfirmasi pesan yang dikirim-->
          <?php
            // Mengecek url apakah ada variable sent atau tidak 
            if(isset($_GET['sent'])) {
              // Jika ada, apakah nilainya == 1, jika ya maka eksekusi code
              if($_GET['sent'] == 1) {
                echo "<div class=\"alert alert-success alert-dismissible mt-2\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                  <strong>Success!</strong> Your message has been sent successfully.
                  </div>";
              } else {
                echo "<div class=\"alert alert-danger alert-dismissible mt-2\">
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                  <strong>Failed! </strong> Your message was failed to sent
                  </div>";
              }
              
              echo "
              <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
              <script>
              $(document).ready(function() {
                $('.alert').delay(4000).fadeToggle(function(){
                  $(this).alert('close');
                });
              })
              </script>
              ";
            }
          ?>
    <div class="row mt-5">
            <?php
                  include "../controllers/koneksi.php";

                  $querySQL = "SELECT * FROM contact WHERE id=4";
                  $execQuerySQL = mysqli_query($koneksi, $querySQL);

                  if(mysqli_num_rows($execQuerySQL) > 0) {
                      while($row = mysqli_fetch_assoc($execQuerySQL)) {
            ?>
      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="fa-solid fa-map"></i>
            <h4>Location:</h4>
            <p><?= $row['lokasi'] ?></p>
          </div>

          <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <h4>Email:</h4>
            <p><?= $row['my_email'] ?></p>
          </div>

          <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <h4>Call:</h4>
            <p><?= $row['no_hp'] ?></p>
          </div>
          <?php
                    }
                }
            ?>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="../user/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>

          
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="sendMsg">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

    <?php
        require_once "../controllers/footer-alt.php";
    ?>
</body>
</html>