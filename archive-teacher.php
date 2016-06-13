<?php get_header() ?>

<div class="index__container">
  <div class="index__content">
    <section class="index__section">
      <h1 class="index__section-title">教師陣容</h1>
      <div class="teachers__list">
        <?php while (have_posts()) : the_post(); ?>
          <div id="teachers__entry-<?= get_the_ID() ?>" <?php post_class('teachers__entry') ?>>
            <a href="<?php the_permalink() ?>">
              <div class="teachers__entry-thumb" style="background-image: url(<?= tkuim_get_post_thumbnail() ?>)"></div>
            </a>
            <a href="<?php the_permalink() ?>">
              <strong class="teachers__entry-title"><?php the_title() ?></strong>
            </a>
            <div><?= types_render_field('teacher_position') ?></div>
            <div>電子信箱：<?= types_render_field('teacher_email') ?></div>
            <div>研究室：<?= types_render_field('lab_address') ?></div>
            <div>個人網站：<?= types_render_field('personal_site') ?></div>
            <div>教師歷程系統：<?= types_render_field('history_site') ?></div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  </div>

  <?php get_sidebar() ?>
</div>

<?php get_footer() ?>
