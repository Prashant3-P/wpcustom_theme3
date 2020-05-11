<?php get_header(); ?>

<section class="page-title overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white font-weight-bold text-uppercase">
                <?php
                          if ( is_category() ) {
	                           single_cat_title( 'Category Archive: ' );
                          } elseif ( is_tag() ) {
	                           single_tag_title( 'Tag Archive: ' );
                           } elseif ( is_author() ) {
	                          the_post();
	                           echo 'Author Archives : ' . get_the_author();
	                           rewind_posts();
                          } elseif ( is_day() ) {
	                           echo 'Daily Archives : ' . get_the_date();
                          } elseif ( is_month() ) {
	                          echo 'Monthly Archives : ' . get_the_date( 'F Y' );
                          } elseif ( is_year() ) {
	                           echo 'Yearly Archives : ' . get_the_date( 'Y' );
	                      }
                ?></h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><?php
                              if ( is_category() ) {
	                              echo 'Category';
                              } elseif ( is_author() ) {
	                              the_post();
	                              echo 'Author';
                              } elseif ( is_day() ) {
	                              echo 'Daily';
                              } elseif ( is_month() ) {
	                              echo 'Monthly';
                              } elseif ( is_year() ) {
	                              echo 'Yearly';
	                          }
                    ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>



<!-- number of posts -->

<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">

                <!-- Blog Post -->
                <?php  if (have_posts()) : while ( have_posts() ) : the_post();   ?>
                <article class="bg-white rounded mb-40">
                    <!-- Post Thumbnail -->
                        <a href="<?php the_permalink(); ?>">
                        	<?php if(has_post_thumbnail() ){
                                the_post_thumbnail('post-imge', array( 'class' => 'img-fluid w-100 rounded-top'));
                        	   } else { ?>
                               <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" class="img-responsive">
                               <?php }
                            ?>
                        </a>
                    <!-- Post Content -->
                    <div>
                        <div class="d-flex align-items-center border-bottom">
                            <!-- Published Date -->
                            <div class="text-center border-right p-4 side-time">
                                <h3 class="text-date mb-0">
                                    <?php the_time('j'); ?>
                                    <span class="d-block paragraph text-uppercase"><?php the_time('M'); ?></span>
                                </h3>
                            </div>
                            <div class="px-4 pt-3">
                                <!-- Post Title -->
                                <a class="h4 d-block mb-10" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <!-- Post Meta -->
                                <ul class="list-inline">
                                    <li class="list-inline-item paragraph mr-5"><i class="fas fa-user mr-2"></i>By
                                    	<a class="paragraph" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                    </li>
                                    <li class="list-inline-item paragraph"><i class="fas fa-th-list mr-2"></i><?php the_category(', '); ?></li>
                                    <li class="list-inline-item paragraph ml-5"><i class="fas fa-comment mr-2"></i>Comments: <?php echo get_comments_number(); ?></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Post Excerpts -->
                        <div class="p-4 read-buttn">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </article>
                <?php endwhile;
                        else :
                ?>
                <p>Sorry no posts matched your criteria.</p>
                <?php endif; ?>

                
                <!-- Pagination -->
                <nav class="mb-md-50">
                    <ul class="pagination justify-content-center align-items-center">
                         <?php
                            echo paginate_links( array(
                               'mid_size'  => 3,
                               'prev_text' => __( '&laquo; Prev', 'textdomain' ),
                               'next_text' => __( 'Next &raquo;', 'textdomain' ),
                           ) );
                          ?>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 py-100">
                <!-- Sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

