<?php get_header() ?>

<div class="index__container">
  <?php while (have_posts()) : the_post() ?>
    <?php get_template_part('content', get_post_format()) ?>
  <?php endwhile; ?>
</div>

<?php get_footer() ?>
