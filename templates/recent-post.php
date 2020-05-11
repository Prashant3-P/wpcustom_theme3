<?php 
 $query_posts = array(
   'post_type' =>'post',
   'posts_per_page' => 6,
   'order' => 'DESC',
); 

$loops = new WP_Query($query_posts);

?>

<?php if ( $loops-> have_posts()): ?>
<?php while ( $loops-> have_posts()): $loops-> the_post(); ?>

<div class="col-4 gal_col">
  <a href="<?php the_permalink(); ?>">
    <?php if(has_post_thumbnail()){
        the_post_thumbnail( 'recent-thumbnails', 80, 80, array('class' => 'img-fluid'));
      } else { ?>
      <img class="card-img-top" src="http://placehold.it/80x80" alt="Card image cap" class="img-responsive">
    <?php } ?>
  </a>
</div>

<?php endwhile; ?>
<?php else: ?>
<?php echo wpautop('Sorry, No posts were found'); ?>
<?php endif; ?>

<?php
  wp_reset_query();
  wp_reset_postdata();
?>
