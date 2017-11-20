<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?> 
    <?php global $post; ?>
    <body <?php body_class(); ?>>
    <?php do_action('get_header');get_template_part('templates/header');?>
    <div class="wrap" role="document">
      <div class="content">
        <div class="main">
          <?php include Wrapper\template_path(); ?>
        </div><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php do_action('get_footer');get_template_part('templates/footer');wp_footer();?>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/custom/dflip.min.js"></script>
  </body>
</html>








