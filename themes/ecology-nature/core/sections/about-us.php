<?php if ( get_theme_mod('ecology_nature_about_section_enable') ) : ?>

  <section id="about-us" class="pt-3 py-md-4 py-lg-0"> 
    <div class="container">
      <?php $ecology_nature_about_pages = array();
        $mod = intval( get_theme_mod( 'ecology_nature_about_us' ));
        if ( 'page-none-selected' != $mod ) {
          $ecology_nature_about_pages[] = $mod;
        }
        if( !empty($ecology_nature_about_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $ecology_nature_about_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <div class="inner-box">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="row">
            <div class="col-lg-6 col-md-6 align-self-center">
              <?php
                if ( has_post_thumbnail() ) :
                  the_post_thumbnail();
                endif;
              ?>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center">
              <h4 class="mt-3"><?php the_title(); ?></h4>
              <p><?php echo wp_trim_words( get_the_content(), get_theme_mod('ecology_nature_about_excerpt_number',50) ); ?></p>
              <p class="slider_btn my-5">
                <?php if ( get_theme_mod('ecology_nature_about_button_text', true) == true ) : ?>
                  <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('ecology_nature_about_button_text' ) ); ?></a>
                <?php endif; ?>
              </p>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
      endif;?>  
      <div class="clearfix"></div>
    </div>
  </section>

<?php endif; ?>