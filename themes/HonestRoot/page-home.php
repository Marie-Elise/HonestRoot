<?php

/*Template name: home */
?>
<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
  <div class="row">
  <img src="<?= IMAGES_URL; ?>/homesmoothies.png" alt="<?php bloginfo("title"); ?>" class="homesmoothies img-responsive center-block"/>

  <div class="homebutton">
    <h4>
      <a href="#">Décrouvrez-nous !</a>
    </h4>
      <svg width="21px" height="19px" viewBox="0 0 21 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="HOME" transform="translate(-710.000000, -981.000000)" fill="#71AC29">
          <polygon id="Shape" transform="translate(720.500000, 990.451018) scale(1, -1) rotate(90.000000) translate(-720.500000, -990.451018) " points="715.538215 989.138518 722.153928 981.788518 720.5 979.951018 711.048982 990.451018 720.5 1000.95102 722.153928 999.113518 715.538215 991.763518 729.951018 991.763518 729.951018 989.138518"></polygon>
          </g>
        </g>
      </svg>
    </div>
 </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>