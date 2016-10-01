<?php $pageTitle = "Home" ?>

<!DOCTYPE html>
<html>
    <?php include 'partials/head.php' ?>
    <body>
        <?php include 'partials/nav.php' ?>

        <div class="fullpage title">
            <div class="v-center">
                <div class="container t-center">
                    <div class="container container-sm">
                        <h1 class="animation slideUp"><?php  $trans->get('home.title') ?></h1>
                        <p class="animation slideUp" data-delay="100"><?php  $trans->get('home.subtitle') ?></p>
                        <a href="#" class="btn btn-primary animation slideUp" data-delay="200"><?php $trans->get('home.btn') ?></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include "partials/footer.php" ?>

    </body>
</html>