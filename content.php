<article id="post-<?= get_the_ID() ?>" <?php post_class('content__article') ?> itemscope itemtype="http://schema.org/Article">
  <header class="content__header">
    <?php if (is_singular()) : ?>
      <h1 class="content__title" itemprop="name"><?php the_title() ?></h1>
    <?php else : ?>
      <h1 class="content__title-wrap">
        <a href="<?= esc_url(get_permalink()) ?>" class="content__title" itemprop="name"><?php the_title() ?></a>
      </h1>
    <?php endif; ?>
  </header>

  <main class="content__body" itemprop="articleBody">
    <?php the_content('Continue reading') ?>
    <?php wp_link_pages() ?>
  </main>

  <footer class="content__footer">
    <i class="fa fa-calendar"></i> <?= esc_html(get_the_date()) ?>
  </footer>
</article>