
<?php

/*Template name: contact */


get_header(); //appel du template header.php  ?>

<?php
$args=array(
  'post_type' => 'smoothie',
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order'   => 'DESC',
);

$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>

    <div id="content" class="container">
      <div class="row">
        <h1 class="col-sm-12"></h1>
      </div>

      <div class="row">

        <div class="col-sm-4">
        <img src="<?= IMAGES_URL; ?>/smoothiecontact.png" alt="<?php bloginfo("title"); ?>" class="smoothiecontact"/>
        </div>

      <div class="col-sm-8">
      <h2 class="titlecontact">RESTONS EN CONTACT !</h2>

      <p class="texte contact">
        Découvrez comment mettre la main sur ces délicieux smoothies bio en contactant HonestRoot sur :
      </p>


<svg width="57px" height="43px" viewBox="0 0 57 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="PAGE-CONTACT" transform="translate(-368.000000, -421.000000)">
            <g id="CONTENU" transform="translate(342.000000, 150.000000)">
                <g id="MAIL" transform="translate(26.000000, 264.000000)">
                    <image id="mail-black-envelope-symbol" x="0" y="0" width="57" height="57" xlink:href="data:image/png;base64,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"></image>
                </g>
            </g>
        </g>
    </g>
</svg>




<svg width="44px" height="44px" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="PAGE-CONTACT" transform="translate(-368.000000, -636.000000)">
            <g id="CONTENU" transform="translate(342.000000, 150.000000)">
                <g id="INSTA" transform="translate(26.000000, 479.000000)">
                    <image id="instagram-logo-(1)" x="0" y="7" width="44" height="44" xlink:href="data:image/png;base64,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"></image>
                </g>
            </g>
        </g>
    </g>
</svg>

</div>
</div>

    <?php
        }
      }
      else {
        echo 'there are no post';
      }
      /* Restore original Post Data */
      wp_reset_postdata();
   ?>
 </div>
  <div class="pagination">
    <?php wp_pagenavi(); ?>
  </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
