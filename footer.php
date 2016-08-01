</main>
<footer class="footer">
  <div class="footer__contact">
    <div class="footer__contact-link">
      <i class="fa fa-phone"></i> (02) 2621-5656#2645 或 2648
    </div>
    <div class="footer__contact-link">
      <i class="fa fa-fax"></i> (02) 2620-9737
    </div>
    <div class="footer__contact-link">
      <i class="fa fa fa-envelope-o"></i> tlmx@oa.tku.edu.tw
    </div>
  </div>
  <div class="footer__copyright">
    網頁維護：詹雅涵、邱瑜瑩<br>
    個資保護聯絡窗口：詹雅涵
  </div>
  <div class="footer__copyright">
    <span class="footer__copyright-text">&copy; <?php bloginfo('name') ?></span>
    <?php wp_nav_menu(array(
      'theme_location' => 'footer',
      'depth' => 1,
      'container' => ''
    )) ?>
    <a class="footer__admin-link" href="<?= admin_url() ?>">管理後台</a>
  </div>
</footer>
<?php wp_footer() ?>
</div>
</body>
</html>
