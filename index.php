<?php get_header() ?>
<main id="main-col">
  <div id="page-content">
    <?php if (have_posts()) : ?>
    <h2 class="section-title">最新消息</h2>
    <ul id="news-list">
      <?php while (have_posts()) : the_post(); ?>
      <li id="post-<?php the_ID(); ?>" class="news-list-item" <?php post_class(); ?>>
        <a href="<?php the_permalink() ?>" class="news-list-link">
          <div class="news-list-item-date">
            <span class="news-list-item-date-month"><?= get_the_date('M') ?></span>
            <span class="news-list-item-date-date"><?= get_the_date('j') ?></span>
          </div>
          <div class="news-list-item-content">
            <strong class="news-list-item-title"><?php the_title(); ?></strong>
            <span class="news-list-item-excerpt"><?php the_excerpt(); ?></span>
          </div>
          <div class="news-list-item-meta">123 人次</div>
        </a>
      </li>
			<?php endwhile;
			the_posts_pagination( array(
				'prev_text'          => __('Previous page', 'tkuim'),
				'next_text'          => __('Next page', 'tkuim')
			));	?>
    </ul>
    <?php endif; ?>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer() ?>
