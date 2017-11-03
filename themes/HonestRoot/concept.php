<?php
/*Template name: concept */

get_header(); //appel du template header.php  ?>
<div id="content" class="container-fluid">
  <?php
  $args=array(
    'post_type' => 'concept',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'meta_key' => 'ordre',
	  'orderby'	=> 'meta_value',
	  'order'	=> 'ASC'
  );

  $the_query = new WP_Query( $args );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $cat = wp_get_post_terms($post->ID, 'gamme', array("fields" => "all"));
      ?>

      <div class="row">
        <div class="image-concept col-md-6 col-sm-6 col-xs-6">
          <div class="<?= $cat[0]->slug ?>">
            <div class="rectangle <?= $cat[0]->slug ?>"></div>
            <div class="image-concept <?= $cat[0]->slug ?>">
            <?php
            if(has_post_thumbnail())
            {
              the_post_thumbnail("hub_concept_thumbnail");
              echo '</div>';
            }
            ?>
            </div>

          </div>

          <div class="text-concept col-md-6 col-sm-6 col-xs-6">
            <h2 class="title <?= $cat[0]->slug ?>"><?php the_title(); ?></h2>
            <div class="text <?= $cat[0]->slug ?>"><?php the_content(); ?></div>
            <div class="rectanglesecond <?= $cat[0]->slug ?>"></div>
            <h2 class="titlesecond <?= $cat[0]->slug ?>"><?php the_field('titlesecond');?></h2>
            <div class="textsecond <?= $cat[0]->slug ?>"><?php the_field('textsecond');?></div>
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
</div><!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
