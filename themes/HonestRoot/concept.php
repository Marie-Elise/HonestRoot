<?php
/*Template name: concept */
 get_header(); //appel du template header.php  ?>

<div class="container-fluid conceptpage">
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
      
      ?>
      <div class="concepts">
        <?php
        if(get_field('display-type') === '1c-d') {
          get_template_part('templates/concept-1c-d');
        }
        else if (get_field('display-type') === '1c-g') {
          get_template_part('templates/concept-1c-g');
        }
        else if (get_field('display-type') === '2c') {
           get_template_part('templates/concept-2c');
        }
        else if (get_field('display-type') === '1t') {
          get_template_part('templates/concept-1t');
        }
        ?>
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
</div>
<?php get_footer(); //appel du template footer.php ?>
