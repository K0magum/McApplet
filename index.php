<?php
/*
*this is the main template
*/


?>
<?php get_header()?>
<!--SUBPAGE HEAD-->

<div class="subpage-head has-margin-bottom">
  <div class="container">
    <h3>Our Blog</h3>
    <p class="lead">Articles and latest bulletins related to our church</p>
  </div>
</div>

<!-- // END SUBPAGE HEAD -->
<main class="container py-5">
      <div class="row">
        <div class="col-sm-9">
					
				<?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>
          <div <?php post_class('custom-class'); ?>>
            <a href="<?php the_permalink(); ?>">
              <h4><?php the_title(); ?></h4>
            </a>
            <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
            <div class="pb-2">
              <i class="fas fa-tags"></i>
              <p class="d-inline"><?php the_tags(__('Tagged: ', ' ~ ','bccwp')) ?></p>
            </div>
            <div class="my-3">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <p><?php the_excerpt() ?></p>
            <div class="mb-3">
              <a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">
                <?php _e('Read more...') ?>
              </a>
            </div>
					</div>
				<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria'); ?></p>

<?php
endif;
?>

  <nav>
    <ul class="nav">
      <li><?php next_posts_link(); ?></li> &nbsp;
      <li><?php previous_posts_link(); ?></li>
    </ul>
  </nav>
</div>

    <aside class="col-sm-3">
      <?php get_sidebar(); ?>
    </aside>

  </div><!-- /row -->
</main><!-- /container -->
<!-- SUBSCRIBE -->
<div class="highlight-bg">
  <div class="container">
    <div class="row">
      <form action="subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
        <div class="form-group col-md-3 hidden-sm">
          <h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
        </div>
        <div class="form-group col-sm-8 col-md-6">
          <label class="sr-only">Email address</label>
          <input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
          <span class="help-block" id="result"></span> </div>
        <div class="form-group col-sm-4 col-md-3">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END SUBSCRIBE -->
<!--footer section-->
<?php get_footer()?>
