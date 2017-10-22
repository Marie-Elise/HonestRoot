<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container-fuid">

  <div class="owl-carousel">
    <?php
    $args=array(
      'post_type' => 'smoothie',
      'posts_per_page' => 12,
      'orderby' => 'date',
	     'order'   => 'DESC',
    );
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
    ?>

      <div class="item">
        <?php
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
                the_post_thumbnail("hub_smoothie_thumbnail");
              echo '</div>';
            }
         ?>

        <h2 class=" titleproduit"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

      </div>


      <?php
        }
      }
      /* Restore original Post Data */
      wp_reset_postdata();
   ?>

  </div>


<!-- Pagination du site -->
  <div class="pagination">
    <?php wp_pagenavi(); ?>
  </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
