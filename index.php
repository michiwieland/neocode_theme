<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>
          <h1>
            <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </h1>
          <!-- meta -->
          <header>
            <small><?php the_time('F jS, Y') ?></small>
          </header>

          <!-- post thumbnail -->
          <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail(); ?>
              </a>
          <?php endif; ?>

          <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
<?php else : ?>
  <article>
    <h1>Not Found</h1>
    <p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  </article>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
