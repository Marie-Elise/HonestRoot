<?php $cat = wp_get_post_terms($post->ID, 'gamme', array("fields" => "all")); ?>

<div class="col-12">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="rectangle <?= $cat[0]->slug ?>">
            <div class="image-concept <?= $cat[0]->slug ?>">
            <?php
                if(has_post_thumbnail())
                {
                    the_post_thumbnail("hub_concept_thumbnail");
            
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="text-concept">
                <h2 class="title <?= $cat[0]->slug ?>"><?php the_title(); ?></h2>
                <div class="text <?= $cat[0]->slug ?>"><?php the_content(); ?></div>
                <div class="rectanglesecond <?= $cat[0]->slug ?>"></div>
                <h2 class="titlesecond <?= $cat[0]->slug ?>"><?php the_field('titlesecond');?></h2>
                <div class="textsecond <?= $cat[0]->slug ?>"><?php the_field('textsecond');?></div>
            </div>
        </div>
    </div>
</div>


