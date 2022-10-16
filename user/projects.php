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

    <link rel="stylesheet" href="../magnific-popup.css?php echo time(); ?>">
    <link rel="stylesheet" href="../style.css?php echo time(); ?>">
    <title>Projects</title>
</head>
<body>
    <?php
        require_once "../controllers/header.php";
    ?>
    <main>
    <section class="projects section-padding" id="section_4" style="margin-top: 50px;">
                <div class="container">
                <div class="section-title mt-5 mt-md-0">
                    <img src="https://assets.website-files.com/62673e4070051ac9b30ad8c7/62673e4070051a81b30ad8d3_Icon%201.svg" class="mb-3" alt="">
                    <h3 class="text-uppercase fw-bold">Projects</h3>
    </div>
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">

                            <?php
                                include "../controllers/koneksi.php";

                                $querySQL = "SELECT * FROM projects";
                                $execQuerySQL = mysqli_query($koneksi, $querySQL);

                                if(mysqli_num_rows($execQuerySQL) > 0) {
                                    while($row = mysqli_fetch_assoc($execQuerySQL)) {     
                            ?>
                                <img src="../assets/img/<?= $row['headerimg']?>" class="avatar-image img-fluid" alt="">

                                <h2 class="ms-4 mb-0 text-capitalize" style="color: #F2F1EF"><?= $row['heading']?></h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag text-uppercase">BackEnd</small>

                                    <h3 class="projects-title"><a href="https://github.com/wildanfhd/new-bookshelf-api" style="text-decoration: none; color:#F2F1EF;" class="project-link"><?= $row['pro_title_1']?></a></h3>
                                </div>

                                <a href="../assets/img/projects/<?= $row['pro_img_1']?>" class="popup-image">
                                    <img src="../assets/img/projects/<?= $row['pro_img_1']?>" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">Software Development</small>

                                    <h3 class="projects-title"><a href="https://github.com/wildanfhd/Vending-Machine" style="text-decoration: none; color:#F2F1EF;" class="project-link"><?= $row['pro_title_2'] ?></a></h3>
                                </div>

                                <a href="../assets/img/projects/<?= $row['pro_img_2'] ?>" class="popup-image">
                                    <img src="../assets/img/projects/<?= $row['pro_img_2'] ?>" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">FrontEnd</small>

                                    <h3 class="projects-title"><a href="https://github.com/wildanfhd/Pemrograman-Web/tree/master/tugas-web" style="text-decoration: none; color:#F2F1EF;" class="project-link"><?= $row['pro_title_3']?></a></h3>
                                </div>

                                <a href="../assets/img/projects/<?= $row['pro_img_3']?>" class="popup-image">
                                    <img src="../assets/img/projects/<?= $row['pro_img_3']?>" class="projects-image img-fluid" alt="">
                                </a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    </main>
    
    <?php
        require_once "../controllers/footer-alt.php";
    ?>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/click-scroll.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>