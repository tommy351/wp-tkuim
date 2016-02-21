<?php get_header() ?>

<?php if (get_header_image()) : ?>
<header class="index__banner">
  <img class="index__banner-img" src="<?= get_header_image() ?>" width="<?= get_custom_header()->width ?>" height="<?= get_custom_header()->height ?>">
</header>
<?php endif; ?>

<div class="index__container">
  <div class="index__content">
    <section class="index__section">
      <h1 class="index__section-title">最新消息</h1>
      <?php while (have_posts()) : the_post(); ?>
        <a id="index__news-<?= get_the_ID() ?>" href="<?php the_permalink() ?>" <?php post_class('index__news-entry') ?>>
          <strong class="index__news-title"><?php the_title() ?></strong>
          <div class="index__news-excerpt"><?= get_the_excerpt() ?></div>
          <div class="index__news-meta">
            <time class="index__news-date" datetime="<?= esc_attr(get_the_date('c')); ?>">
              <i class="fa fa-calendar"></i> <?= esc_html(get_the_date()) ?>
            </time>
            <?php if(function_exists('the_views')) : ?>
              <span class="index__news-views"><i class="fa fa-bar-chart"></i> <?php the_views() ?></span>
            <?php endif; ?>
          </div>
        </a>
      <?php endwhile; ?>
      <nav class="index__pagination">
        <?= paginate_links() ?>
      </nav>
    </section>
  </div>

  <?php get_sidebar() ?>
</div>

<?php get_footer() ?>
