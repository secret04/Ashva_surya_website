<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ashva surya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/public/backend/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="<?= base_url() ?>/public/backend/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/public/backend/assets/css/dashboard/dashboard_1.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/public/backend/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/public/backend/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/public/backend/assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <!-- Page Level Plugin/Style Ends -->
</head>

<body>
    <div class="container">
        <div class="row mt-5">

            <div class="col">
                <img src="<?= base_url() ?>/public/images/pic.jpg" width="100%" height="250px" class="mb-5" alt="">
                <marquee class="p-3 mb-5" style="background-color: #f8f8ff;" width="100%" direction="right" height="80px">
                    This is a sample scrolling text that has scrolls texts to right.
                </marquee>
                <div class="container">
                    <div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                        <?php foreach ($news as $item) { ?>

                            <div class="col-lg-12">
                            <h4 class="text-center"><?= $item['title'] ?></h4>
                                <img src="<?= base_url('/uploads/' . $item['image']); ?>" class="img-fluid img-responsive mb-3">

                                <article>
                                    <div class="row">

                                       
                                        <p >
                                            <?= $item['description'] ?>
                                        </p>

                                        <br>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- <table width="97%" height="400" border="0">

                    <tbody>
                        <?php foreach ($news as $item) : ?>
                            <tr><td> <h2><?= $item['title'] ?></h2></td> <br>
			<img src="<?= base_url('/uploads/' . $item['image']); ?>" class="img-fluid img-responsive mb-3" >
                            <td></td> <br>
                                <td> <?= $item['description'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table> -->
            </div>

        </div>
    </div>
    <footer>
        <div class="footer-wrapper mx-5 px-5">

            <p style="text-align:center;" class="footer-section  px-5 mx-5">Copyright © 2023 <a target="_blank" href="#">ASHVA SURYA</a>, Powered By: <a>Shreshshta</a><i class="las la-heart text-primary"></i></p>


        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>