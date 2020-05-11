<?php get_header(); ?>


<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>



<section class="section aboutmeis">
    <div class="container">
        <div class="row rounded bg-gray">
            <div class="col-lg-7">
                <!-- ceo content -->
                <div class="p-5">
                	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2 class="section-title section-title-border-half"><?php the_title(); ?>
                     </h2>
                    <?php the_content(); ?>
                    <img src="<?php echo get_theme_mod("signature_imageControl_setting"); ?>">
                    <?php endwhile;
                      else :
                    ?>
                   <p>No content found</p>
                  <?php endif; ?>
                </div>
            </div>
            <!-- ceo image -->
            <div class="col-lg-5 rounded-right">
            	<?php if ( has_post_thumbnail() ) {
                   the_post_thumbnail('about_imgs', array('class'=> 'ceo-image'));
            	  } else { ?>
                  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
            	<?php } ?>
            </div>
        </div>
    </div>
</section>



<?php 
  $abt_post = array(
    "post_type" => "post",
    'posts_per_page' => 6,
    "post_publish" => "publish",
    "author" => 1
  );

$query_post = new WP_query($abt_post);
?>


<section class="section abt-admin">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
                <h2 class="section-title section-title-border"> All Posts Posted by Admin </h2>
            </div>

            <!-- service item -->
            <?php if($query_post -> have_posts()): ?>
            <?php while($query_post-> have_posts()): 
              $query_post -> the_post(); 
            ?>
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card text-center">
                    <div class="card-img-wrapper overlay-rounded-top">
                      <?php if(has_post_thumbnail()){
                        the_post_thumbnail('abt-post-img', array('class' => 'card-img-top rounded-0'));
                      } else {?>
                        <img class="card-img-top" src="http://placehold.it/348x188" alt="Card image cap" class="img-responsive">
                      <?php } ?>
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title pt-3"><?php the_title(); ?></h4>
                        <div class="card-text mx-2 mb-0"><?php $excerpt = get_the_excerpt();
            echo substr( $excerpt, 0, 55); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary translateY-25">Read More</a>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else: ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>  

            <?php
              wp_reset_query();
              wp_reset_postdata();
            ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>











