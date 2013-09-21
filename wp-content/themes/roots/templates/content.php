<article <?php post_class(); ?>>
  <?php if (comments_open()) : ?>
    <div class="comments-link pull-right">
      <?php comments_popup_link(); ?>
    </div>
  <?php endif; ?>
  <header>
    <?php if (has_post_thumbnail()) { ?>
    <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail('thumbnail'); ?>
    </a>
    <?php } ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
