<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-android-close"></i></button>
      <div class="modal-body">
          <h1>Contact Us</h1>
        <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]');?>
      </div>
    </div>
  </div>
</div>

<section class="doc red-bg footer-cta leaves-bg">
    <div class="container">
        <div class="cta-entry fadein">
            <h1>What are you waiting for?</h1>
            <h1 class="bold">Partner with LaHaV</h1>
            <a href="" data-toggle="modal" data-target="#contactModal" class="btn green-outline">CONTACT US</a>
        </div>
    </div>
</section>
<footer class="content-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="footer-entry">
                    <?php echo the_field('footer_left_box',4);?>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="footer-entry middle-col">
                    <a class="school-logo" href="http://www.shalhevet.org/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/dist/images/shalhevet.png" class="img-fluid" />
                        <p>A project of Shalhevet High School</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-4"> 
                <div class="footer-entry text-right">
                    <?php echo the_field('footer_right_box',4);?>
                </div>
            </div>
        </div>
        <?php // dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="copyright">
        <p>&copy; <?php echo date("Y"); ?> LaHav. All Rights Reserved.</p>
    </div>
</footer>
 