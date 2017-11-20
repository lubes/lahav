<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<section class="intro-slider">
    <div class="slider-wrap">
        <a class="scroll-down" href="#more"><i class="ion-ios-arrow-down"></i></a>
        <div class="home-slider">
            <?php if( have_rows('homepage_slider') ): while ( have_rows('homepage_slider') ) : the_row();?>
                <div class="slide-item full-height" style="background: url(<?php echo the_sub_field('image');?>) no-repeat center;background-size: cover;">
                <div class="hero-entry">
                    <h1><?php echo the_sub_field('slide_text');?></h1>
                    <a href=""  data-toggle="modal" data-target="#contactModal" class="btn green-outline">CONTACT US</a>
                </div>
                </div> 
            <?php endwhile;endif;?>
        </div>    
    </div>
</section>
<section class="doc green-bg" id="more">
    <div class="container">
        <div class="cta-entry fadein">
            <h2><?php echo the_field('intro_copy');?></h2>
            <figure class="leaf"><img src="<?php echo get_template_directory_uri();?>/dist/images/leaf.png" class="img-fluid"></figure>
        </div>
    </div>
</section>
<section class="doc">
    <div class="container">
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="entry fadein">
                    <img src="<?php echo the_field('first_box_image');?>" class="img-fluid" />
                </figure>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry text-right fadein">
                    <h1 class="bold"><?php echo the_field('first_box_title');?></h1>
                    <p><?php echo the_field('first_box_copy');?></p>
                    <a href="<?php echo site_url();?>/curriculum" class="btn btn-default">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry fadein">
                    <h1 class="bold"><?php echo the_field('second_box_title');?></h1>
                    <p><?php echo the_field('second_box_copy');?></p>
                    <a href="<?php echo site_url();?>/app" class="btn btn-default">LEARN MORE</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="entry fadein">
                    <img src="<?php echo the_field('second_box_image');?>" class="img-fluid" />
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="entry laying-ipad fadein">
                    <img src="<?php echo the_field('third_box_image');?>" class="img-fluid" />
                </figure>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry text-right fadein">
                    <h1 class="bold"><?php echo the_field('third_box_title');?></h1>
                    <p><?php echo the_field('third_box_copy');?></p>
                    <a href="<?php echo site_url();?>/our-story" class="btn btn-default">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="curved-top">
    <div class="row flex-items-xs-middle no-gutters">
        <div class="col-xs-12 col-sm-12 col-md-6" style="background:url('<?php echo the_field('left_image_image');?>') no-repeat center;background-size:cover;">
            <div class="box-entry">
                <div class="inner-entry has-curve">
                <?php echo the_field('left_image_copy');?>
                <a href="<?php echo site_url();?>/curriculum" class="btn green-outline">OUR CURRICULUM</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 red-bg">
            <div class="box-entry">
                <div class="inner-entry has-curve">
                <?php echo the_field('right_box_copy');?>
                <a href="<?php echo site_url();?>/jastrow" class="btn btn-default">JASTROW DICTIONARY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="cta-entry dark fadein">
            <figure class="leaf"><img src="<?php echo get_template_directory_uri();?>/dist/images/logo-icon.png" class="img-fluid"></figure>
            <?php echo the_field('teachers_section');?>
            <a href="<?php echo site_url();?>/our-story" class="btn btn-default">OUR STORY</a>
        </div>
    </div>
</section>

<section class="doc testimonials blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="testimonial-img fadein">
                    <img src="<?php echo the_field('testimonial_1_image');?>" class="img-fluid rounded-circle" />
                </figure>
                <p class="testimonial fadein">"<?php echo the_field('testimonial_1_copy');?>"</p>
                <p class="fadein"><?php echo the_field('testimonial_1_source');?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="testimonial-img fadein">
                    <img src="<?php echo the_field('testimonial_2_image');?>" class="img-fluid rounded-circle" />
                </figure>
                <p class="testimonial fadein">"<?php echo the_field('testimonial_2_copy');?>"</p>
                <p class="fadein"><?php echo the_field('testimonial_2_source');?></p>
            </div>
        </div>
    </div>
</section>

