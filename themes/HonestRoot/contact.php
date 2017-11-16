<?php
/*Template name: contact */

get_header(); //appel du template header.php  ?>

<main class="container-fluid contact">
    <div class="row">
        <div class="col-xs-2 col-lg-3 smoothie_contact">
            <img src="<?= IMAGES_URL; ?>/limemint.png" alt="image de smoothie gauche" />
        </div>

        <div class="col-xs-10 col-lg-6" id="centre_contact">
            <div class="row">
                <div id="formulaire_contact">
                    <!-- les deux titres de la page -->
                    <div class="row">
                        <h1 class="col-sm-12">Restons en contact !</h1>
                        <h2 class="col-sm-12">Contactez-nous pour savoir comment mettre la main sur nos délicieux smoothies ou pour nous envoyer votre avis !</h2>
                    </div>

                    <!-- la partie formulaire -->
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo do_shortcode('[wpforms id="240" title="false" description="false"]'); ?>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- le titre de la partie instagram 
                <h2 class="col-sm-10 offset-4">Suivez notre actualité sur notre Instagram !</h2>-->

                <!-- la partie où on récupère les images du compte insta
                <div class="col-sm-10">
                    <div class="row" id="insta_feed">
                        <img src="<?= IMAGES_URL; ?>/1.PNG" alt="image de smoothie gauche" class="col-sm-2 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/2.PNG" alt="image de smoothie gauche" class="col-sm-2 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/3.PNG" alt="image de smoothie gauche" class="col-sm-2 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/4.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/5.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/6.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/7.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/8.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/9.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/10.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/11.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                        <img src="<?= IMAGES_URL; ?>/12.PNG" alt="image de smoothie gauche" class="col-sm-4 col-lg-2"/>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
</main>

<?php get_footer(); //appel du template footer.php ?>
