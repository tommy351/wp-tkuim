<?php get_header() ?>

<div class="index__container">
  <div class="index__content">
    <section class="index__section">
      <h1 class="index__section-title">教師陣容</h1>
      <div class="teachers__list">
        <?php while (have_posts()) : the_post(); ?>
          <a id="teachers__entry-<?= get_the_ID() ?>" href="<?php the_permalink() ?>" <?php post_class('teachers__entry') ?>>
            <div class="teachers__entry-thumb-wrap">
              <div class="teachers__entry-thumb" style="background-image: url(<?= tkuim_get_post_thumbnail() ?>)"></div>
            </div>
            <strong class="teachers__entry-title"><?php the_title() ?></strong>
          </a>
        <?php endwhile; ?>
      </div>
    </section>
  </div>

  <?php get_sidebar() ?>
</div>

<?php get_footer() ?>
