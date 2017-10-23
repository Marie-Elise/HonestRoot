<?php
/*Template name: recettes */

get_header(); //appel du template header.php  ?>
<div id="content" class="container">
  <div class="row">
    <h4 clas="col-sm-12">Décrouvrez la page recettes !</h4>
  </div>

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

      <div class="row">
        <h1 class="col-sm-12"></h1>
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
 </div><!-- /content -->


<?php get_footer(); //appel du template footer.php ?>
