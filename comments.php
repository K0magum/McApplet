<?php 
/*
*template for comments blog
*/

?>

<?php

  if(post_password_required()) {
    return;
  }
?>
  <section>
    <?php if( have_comments() ) : ?>
      <h3 class="comments-head">
        <?php 
          $number_of_comments = get_comments_number();
          if( $number_of_comments === 1) {
            printf(
              _x(
                
                'One comment on &ldquo;%s&rdquo;',
                'comments title'
              ),
              get_the_title()
            );
          } else {
            printf(
              _nx(
                '%1$s comment on &ldquo;%2$s&rdquo;',
                '%1$s comments on &ldquo;%2$s&rdquo;',
                $number_of_comments,
                'comments title'
              ),
              number_format_i18n($number_of_comments),
              get_the_title()
            );
          }
        ?>
      </h2> 
      <ol>
          <?php
            wp_list_comments( array(
              'style' => 'ol',
              'avatar_size' => 70
            ))
          ?>
      </ol>
    <?php endif ?>
     <?php  
     the_comments_navigation();                      
    
    if(!comments_open()) : ?>
    <p><?php esc_html_e('Comments are closed for this post'); ?></p>

  </section>
  <?php endif ;?>
<?php get_template_part('template-parts/custom-comment-form');?>