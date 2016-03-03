<?php get_header(); ?>

 <main>

   <section class="content">

      <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <article>
                <!-- post header -->
                <header>
                  <h2>
                    <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <p>by <?php the_author(); ?></p>
                </header>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endif; ?>

                <!-- post content -->
                <?php the_content(); ?>

            </article>

          <?php endwhile; ?>

      <?php else : ?>

        <article>

          <h2>Not Found</h2>
          <p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

        </article>

      <?php endif; ?>

  </section>

  <!-- Load sidebar -->
  <?php get_sidebar(); ?>

</main>

<!-- Load footer -->
<?php get_footer(); ?>
