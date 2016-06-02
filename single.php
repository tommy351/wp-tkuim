<?php get_header() ?>

<div class="index__container">
  <div class="index__content">
    <?php while (have_posts()) : the_post() ?>
      <?php get_template_part('content', get_post_format()) ?>
    <?php endwhile; ?>
  </div>

  <?php get_sidebar() ?>
</div>

<?php get_footer() ?>
