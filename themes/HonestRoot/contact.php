<?php
/*Template name: contact */

get_header(); //appel du template header.php  ?>

<main class="container-fluid contact">
    <div class="row">
        <div class="col-xs-2 col-lg-3 smoothie_contact">
            <img src="<?= IMAGES_URL; ?>/limemint.png" alt="image de smoothie gauche" />
        </div>

        <div class="col-xs-10 col-lg-8" id="centre_contact">
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
            <?php echo do_shortcode('[instagram-feed]');  ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); //appel du template footer.php ?>
