<?php get_header() ?>

<div class="index__container">
  <div class="index__content">
    <?php while (have_posts()) : the_post() ?>
      <article id="teacher-<?= get_the_ID() ?>" <?php post_class('teachers__article') ?>>
        <div class="teacher__cover">
          <?php the_post_thumbnail() ?>
        </div>
        <header class="content__header">
          <h1 class="teacher__title"><?php the_title() ?></h1>
          <div class="teacher__position"><?= types_render_field('teacher_position') ?></div>
        </header>
        <main class="content__body">
          <p>
            <div>電子信箱：<?= types_render_field('teacher_email') ?></div>
            <div>研究室：<?= types_render_field('lab_address') ?></div>
            <div>個人網站：<?= types_render_field('personal_site') ?></div>
            <div>教師歷程系統：<?= types_render_field('history_site') ?></div>
          </p>
          <?php the_content('Continue reading') ?>
          <?php wp_link_pages() ?>
        </main>
      </article>
    <?php endwhile; ?>
  </div>

  <?php get_sidebar() ?>
</div>

<?php get_footer() ?>
