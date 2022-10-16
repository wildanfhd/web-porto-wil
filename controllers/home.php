<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="../style.css?php echo time(); ?>">

    <title>Home</title>
</head>
<body>
    
    <?php
        require_once "header.php";
    ?>
    
    <!-- Home Section -->
    <section class="home py-5">

        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                    <?php
                                include "koneksi.php";

                                $querySQL = "SELECT * FROM home";
                                $execQuerySQL = mysqli_query($koneksi, $querySQL);

                                if(mysqli_num_rows($execQuerySQL) > 0) {
                                    while($row = mysqli_fetch_assoc($execQuerySQL)) {

                                    
                    ?>
                        <img src="../assets/img/<?= $row['profileimg'] ?>" class="rounded-circle mw-100" loading="lazy" alt="profile img" style="border-radius: 50%;  height: 333px; max-width:fit-content">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text fw-bold">
                        <!-- HEADER UTAMA -->
                        <div class="hero-text-wrapper">
                            <h2 class="hero-text"><?= $row['judulsatu'] ?></h2>
                            <div class="header-icon-wrapper">
                                <h2 class="hero-text"><?= $row['juduldua'] ?></h2>
                                <img src="<?= $row['judulimg'] ?>" class="header-icon" alt="">
                                <h2 class="hero-text"><?= $row['judultiga'] ?></h2>
                            </div>
                            <h2 class="hero-text"><?= $row['judulempat'] ?></h2>
                            

                            <!-- SKILL BAHASA PEMROGRAMAN -->
                            <div class="header-detail-wrapper">
                                <h5 class="text-uppercase"><?= $row['skill1'] ?></h5>
                                <img src="<?= $row['subjudulimg'] ?>" loading="lazy" alt="" class="header-small-icon">
                                <h5 class="text-uppercase"><?= $row['skill2'] ?></h5>
                                <img src="<?= $row['subjudulimg'] ?>" loading="lazy" alt="" class="header-small-icon">
                                <h5 class="text-uppercase"><?= $row['skill3'] ?></h5>
                                <?php
                                }
                            }
                            ?>
                            </div>
                        </div>

                        <!-- Button -->
                        <form action="../user/about.php">
                            <button class="button button5 btn-mywork" type="submit">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Home Section -->
    </section>
    <?php
        require_once "../controllers/footer-alt.php";
    ?>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>