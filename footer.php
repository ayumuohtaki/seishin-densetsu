<?php if( ! is_front_page() ): ?>
            </div>
          </div>
        </main>
      </div>
    </div>
<?php endif; ?>
    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.png" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
          <div class="enterprise-detail">
            <p class="name">株式会社 誠信電設</p>
            <p class="address">
              〒174-0043<br>
              東京都板橋区坂下3-29-4<br>
              安村ハイツ101
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
<?php
wp_nav_menu(
    array (
        'theme_location' => 'place_footer',
        'container' => false,
    )
);
?>
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2023 SEISHIN DENSETSU CO.,LTD.</small>
      </p>
    </footer>
  </div><!-- /.container -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>