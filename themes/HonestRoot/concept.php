
<?php

/*Template name: concept */


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




      <div class="homebutton">
      <h4><a href="#">Décrouvrez la page concept !</a></h4>


      </a>

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
