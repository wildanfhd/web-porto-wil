<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style.css?php echo time(); ?>">

    <title>About Me</title>
</head>
<body>
    <?php
        require_once "../controllers/header.php";
    ?>
<!-- ======= About Section ======= -->
<section id="about" class="about py-5">
    <!-- <div class="row min-vh-100 align-items-center align-content-center"> -->
        <!-- ======= About Me ======= -->
        <div class="about-me container">

        <div class="section-title mt-5 md-md-0">
                <img src="https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051a81b30ad8d3_Icon%201.svg" class="mb-3" alt="">
                <?php
                            include "../controllers/koneksi.php";

                            $querySQL = "SELECT * FROM about";
                            $execQuerySQL = mysqli_query($koneksi, $querySQL);

                            if(mysqli_num_rows($execQuerySQL) > 0) {
                                while($row = mysqli_fetch_assoc($execQuerySQL)) {

                                    
                ?>
                <h3 class="text-uppercase fw-bold"><span style="color: #E64D33;"><?= $row['heading1'] ?></span> <?= $row['heading2'] ?></h3>
        </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="../assets/img/<?= $row['aboutimg'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3 style="
    color: #1c2331;" class="text-capitalize"><?= $row['subheading1'] ?> <span style="color:#E64D33;"> <?= $row['subheading2'] ?> </span><?= $row['subheading3'] ?> </h3>
                    <p class="fst-italic">
                    <?= $row['deskripsi1'] ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="fa-solid fa-chevron-right" style="
    color: #E64D33;"></i> <strong>Birthday:</strong> <span><?= $row['tgl_lahir'] ?></span></li>
                                <li><i class="fa-solid fa-chevron-right" style="
    color: #E64D33;"></i> <strong>Phone:</strong> <span><?= $row['no_hp'] ?></span></li>
                                
                                </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="fa-solid fa-chevron-right" style="
    color: #E64D33;"></i> <strong>Age:</strong> <span>20</span></li>
                                <li><i class="fa-solid fa-chevron-right" style="
    color: #E64D33;"></i> <strong>City:</strong> <span class="text-capitalize"><?= $row['kota'] ?></span></li>
                            </ul>
                        </div>
                </div>
                <p class="mt-2">
                <?= $row['deskripsi2'] ?> 
                <?= $row['deskripsi3'] ?> 
                </p>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        </div><!-- End About Me -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title mt-4">
            <h2>Interests</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="icon-box">
                    <i class="fa-solid fa-dumbbell" style="color: #ffbb2c;"></i>
                    <h3 style="color: #F2F1EF;">Sports</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                    <i class="fa-solid fa-headphones" style="color: #5578ff;"></i>
                    <h3 style="color: #F2F1EF;">Listening to music</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                    <i class="fa-solid fa-gamepad" style="color: #e80368;"></i>
                    <h3 style="color: #F2F1EF;">Video Games</h3>
                    </div>
                </div>
        </div>
        </div><!-- End Interests -->

        <!-- ======= Hobbies ======= -->
        <div class="interests container">

            <div class="section-title mt-4">
            <h2>Hobbies</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="icon-box">
                    <i class="fa-sharp fa-solid fa-futbol" style="color: #5578ff;"></i>
                    <h3 style="color: #F2F1EF;">Futbol</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                    <i class="fa-solid fa-gamepad" style="color: #5578ff;"></i>
                    <h3 style="color: #F2F1EF;">Playing Games</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                    <i class="fa-solid fa-tv" style="color: #e80368;"></i>
                    <h3 style="color: #F2F1EF;">Watching Movies & Series</h3>
                    </div>
                </div>
        </div>
        </div><!-- End Hobbies -->


    <!-- </div> -->
</section><!-- End About Section -->


    
    <?php
        require_once "../controllers/footer-alt.php";
    ?>

<script src="../assets/purecounter/purecounter_vanilla.js"></script>
</body>
</html>