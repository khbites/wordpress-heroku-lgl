<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <?php if ( has_post_thumbnail() ) {
    echo "<figure>";
    the_post_thumbnail(array(150,150));
    echo "</figure>";
    } ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
