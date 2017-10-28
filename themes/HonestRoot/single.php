<div class="produit">
<?php get_header(); //appel du template header.php  ?>

  <?php
  // boucle WordPress
  if (have_posts()){
    while (have_posts()){
      the_post();
      ?>

      <!-- LEFT SIDE -->
      <div class="left-part-container-1">
        <div class="left-part-container-2">
          <div class="left-part" id="left">
            <div class="image-png">
            <?php
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
              the_post_thumbnail("full");
              echo '</div>';
            }
            $cat = wp_get_post_terms($post->ID, 'genre', array("fields" => "all"));
            ?>
          </div>
          <p class="<?= $cat[0]->slug ?>"><?php the_field('background');?></p>
        </div>
      </div>
    </div>

      <!-- RIGHT SIDE -->
      <div class="right-part-container-1 <?= $cat[0]->slug ?>">
        <div class="right-part-container-2">
          <div class="right-part" id="right">
            <!-- catégorie -->
            <h1 class="titre-categorie"><?php the_title(); ?></h1>
            <!-- fiche produit -->
            <p class="titre-produit"><?php the_field('nom');?></p>
            <!-- 1st Information -->
            <div class="informations">
              <p class="sous-titre">100% ORGANIC</p>
              <p class="texte-normale"><?php the_field('ingredients');?></p>
            </div>
            <hr class="produit-hr">
            <!-- 2nd Information -->
            <div class="superfood">
              <p class="sous-titre">SUPERFOOD</p>
              <p class="texte-normale"><?php the_field('description');?></p>
            </div>
            <hr class="produit-hr">
            <!-- nutritional information -->
            <div class="nutrition">
              <p class="sous-titre">INFORMATIONS NUTRITIONNELLES</p>
              <div id='menu-container'>
                <!-- calories -->
                <div class='table-row'>
                  <div class='table-column left'>
                    Calories
                  </div>
                  <div class='table-column right'>
                    <p class="information-nutrition"><?php the_field('kcal');?></p>
                  </div>
                </div>
                <!-- glucides -->
                  <div class='table-row'>
                    <div class='table-column left'>
                      Glucide
                    </div>
                    <div class='table-column right'>
                      <p class="information-nutrition"><?php the_field('carbs');?></p>
                    </div>
                  </div>
                  <!-- gras (saturé) -->
                  <div class='table-row'>
                    <div class='table-column left'>
                      Gras (saturé)
                    </div>
                    <div class='table-column right'>
                      <p class="information-nutrition"><?php the_field('gras');?></p>
                    </div>
                  </div>
                  <!-- sucre -->
                  <div class='table-row'>
                    <div class='table-column left'>
                      Sucre
                    </div>
                    <div class='table-column right'>
                      <p class="information-nutrition"><?php the_field('sucre');?></p>
                    </div>
                  </div>
                  <!-- protéines -->
                  <div class='table-row'>
                    <div class='table-column left'>
                      Protéïne
                    </div>
                    <div class='table-column right'>
                      <p class="information-nutrition"><?php the_field('proteine');?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

<?php get_footer(); //appel du template footer.php ?>
</div> <!-- produit -->
