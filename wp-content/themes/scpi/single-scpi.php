<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

<div class="container">
    <header class="scpi-header">
      <div>
        <h1 class="scpi__title"><?php the_title(); ?></h1>
        <div class="scpi__meta">
          <div class="scpi__location"><?php  $terms = get_the_terms($post->ID, 'scpi-type');foreach( $terms as $term ) { print $term->name ;} ?> gerée par   </div>
          <div class="scpi__price"><?php  $terms = get_the_terms($post->ID, 'société');foreach( $terms as $term ) { print $term->name ;} ?></div>
        </div>
        <div class="scpi__actions">
        <div class="scpi-option"><img style="margin-right:30px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW1b3omFld-QJV5z0uIDAv6nsv7l9MPwyWGw&usqp=CAU" alt=""> Taux de Distribution  <h3><?= get_post_meta($post->ID,'_taux',true) ?> %</h3></div>
        </div>

      </div>
      <div>
        <div class="scpi__photos">
      <div class="scpi-option"><img src="https://w7.pngwing.com/pngs/481/618/png-transparent-euro-coins-euro-sign-computer-icons-euro-gold-coin-trademark-orange.png" alt=""> Prix de la part </br><?= get_post_meta($post->ID,'_prix',true) ?> €</div>
      <div class="scpi-option"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSulljo_SFoukDlKxbfgCdy38GNECPNjRo10w&usqp=CAU" alt=""> Capitalisation</br> <?= get_post_meta($post->ID,'_capital',true)?> €</div>
      <div class="scpi-option"><img src="https://w7.pngwing.com/pngs/481/618/png-transparent-euro-coins-euro-sign-computer-icons-euro-gold-coin-trademark-orange.png"  alt=""> Valeur de retrait <br><?= get_post_meta($post->ID,'_val',true)?> €</div>
      <div class="scpi-option"><img src="https://png.pngtree.com/element_our/png_detail/20181229/vector-statistics-icon-png_302648.jpg" alt=""> Taux d'occupation financier </br> <?= get_post_meta($post->ID,'_occup',true)?> %</div>
      
          
        </div>
      </div>
    </header>


  </div>
  <?php endwhile; ?>


<?php get_footer(); ?>