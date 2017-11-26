<?php
/*
Template Name: Page Recettes
*/
get_header(); ?>

<main class="container recettes">
    <div class="row">
        <div class="col-xs-12 col-lg-12 recette-rectangle">
            <div></div>
            <h1>Découvrez notre sélection de recettes pour accompagner nos smoothies !</h1>
        </div>
    </div>
    
    <div class="row recette">
        <?php

        //on affiche les recettes
        $args = array(
            'post_type' => 'recettes',
            'orderby' => 'date',
                'order'   => 'ASC',
        );
        
        $taxonomy = array(
            'post_type' => 'type',
        );

        $the_query = new WP_Query( $args, $taxonomy );
        
        $i=0;
        $j=0;
        $k=0;
        $l=0;
        $n=0;
        
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
        ?>
    
        
        <article class="col-xs-12 col-sm-4 col-lg-3">
            <div class="recette-image" data-key="<?php echo $i+=1; ?>">
                <?php
                    if(has_post_thumbnail())
                    {
                        echo '<div class="thumbnail">';
                            //remplacer cette ligne
                            the_post_thumbnail("hub_recettes_thumbnail");
                        echo '</div>';
                ?>
                <p class="recette-nombre">
                    <?php echo $j+=1; ?>
                </p>

                <?php   
                    }
                 ?>
            </div>

            <p class="recette-name"><?php the_title(); ?></p>

            <div class="recette-color">
                <?php 
                    $terms = get_the_terms($post->id, 'type');
                    $count = count( $terms );
                    if ( $count > 0 ) {
                        foreach ( $terms as $term ) {
                            echo '<p class="recette-type-name">' . $term->name . '</p>';
                        }
                    }
                ?>
            </div>
        </article>
        
        
        <div class="col-lg-12 detail-recette close-recette" data-key="<?php echo $k+=1; ?>">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div>
                        <?php
                            if(has_post_thumbnail())
                            {
                              echo '<div class="thumbnail">';
                                the_post_thumbnail("full");
                              echo '</div>';
                            }
                         ?>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-lg-6 detail-recette-texte">
                
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 recette-fermer" data-key="<?php echo $l+=1; ?>">
                            <img src="<?= IMAGES_URL; ?>/cancel.png" alt="fermer la recette">
                        </div>
                        
                        <h2 class="col-sm-12 col-lg-12"><?php the_title(); ?></h2>
                        
                        <div class="col-sm-12 col-lg-12">
                            <h3>Réalisation</h3>
                        </div>
                        
                        <div class="col-sm-12 col-lg-12 recette_temps">
                            <ul>
                                <li>Temps de préparation : <?php the_field('temps_de_preparation') ?></li>
                                <li>Temps de cuisson : <?php the_field('temps_de_cuisson') ?></li>
                                <li>Temps de repos : <?php the_field('temps_de_repos') ?></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-lg-12">
                            <h3>Ingrédients</h3>
                        </div>
                       
                        <div class="col-sm-12 col-lg-12 recette_ingredient">
                            <ul><?php the_field('ingredients') ?></ul>
                        </div>
                        
                        <div class="col-sm-12 col-lg-12 recette-responsive-image">
                            <?php
                                if(has_post_thumbnail())
                                {
                                  echo '<div class="thumbnail">';
                                    //peut-être changer cette ligne
                                    the_post_thumbnail("hub_detail_recette_thumbnail");
                                  echo '</div>';
                                }
                             ?>
                        </div>

                        <div class="col-sm-12 col-lg-12">
                            <h3>Préparation</h3>
                        </div>
                        
                        <div class="col-sm-12 col-lg-12 recette_preparation">
                            <ul><?php the_field('instructions') ?></ul>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        
        
        <?php
                }
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>   
    </div>
    
</main>

<?php get_footer(); ?>