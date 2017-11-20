<?php
/**
 * Template Name: App Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
 
<section class="doc blue-bg leaves-bg" id="more">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2">
                <div class="entry text-center fadein">
                    <h4><?php echo the_field('app_description');?></h4>
                </div>
            </div>
        </div>
        <div class="icons">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2 offset-md-1">
                    <div class="icon fader">
                      <div class="overlay-copy">
                            <p><?php echo the_field('collaborate_icon');?></p>
                        </div>
                        <figure class="icon-img"><img src="<?php echo get_template_directory_uri();?>/dist/images/users-1.png" class="img-fluid" />
                        </figure>
                        <p>COLLABORATE</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="icon fader">
                      <div class="overlay-copy">
                            <p><?php echo the_field('resources_icon');?></p>
                        </div>
                        <figure class="icon-img"><img src="<?php echo get_template_directory_uri();?>/dist/images/archive.png" class="img-fluid" /></figure>
                        <p>RESOURCES</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="icon fader">
                      <div class="overlay-copy">
                            <p><?php echo the_field('annotation_icon');?></p>
                        </div>
                        <figure class="icon-img"><img src="<?php echo get_template_directory_uri();?>/dist/images/compose.png" class="img-fluid" /></figure>
                        <p>ANNOTATION</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="icon fader">
                      <div class="overlay-copy">
                            <p><?php echo the_field('search_icon');?></p>
                        </div>
                        <figure class="icon-img"><img src="<?php echo get_template_directory_uri();?>/dist/images/search-1.png" class="img-fluid" /></figure>
                        <p>SEARCH</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="icon fader">
                      <div class="overlay-copy">
                            <p><?php echo the_field('portfolio_icon');?></p>
                        </div>
                        <figure class="icon-img"><img src="<?php echo get_template_directory_uri();?>/dist/images/folder-11.png" class="img-fluid" /></figure>
                        <p>PORTFOLIO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <figure class="leaf smallest"><img src="<?php echo get_template_directory_uri();?>/dist/images/compose.png" class="img-fluid"></figure>
            <?php echo the_field('module_1_title');?>
        </div>
        <div class="app-module">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <?php if( have_rows('module_sections') ): $i = 0; while ( have_rows('module_sections') ) : the_row();  ?>
                    <?php $i++; ?>
                        <a class="app-link fadein ipad-mod <?php if($i==1) { echo 'active'; }?>"  style="<?php if( $i > 2 ) { echo 'display: none !important;'; } ?>" data-id="module-<?php echo $i;?>">
                            <?php echo the_sub_field('copy');?>
                        </a>
                    <?php endwhile;endif;?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="app-img ipad-mod" id="ipad_image">
                        <?php if( have_rows('module_sections') ): $i = 0; while ( have_rows('module_sections') ) : the_row();  $i++; ?>
                            <div class="image-holder ipad-mod <?php if($i==1) { echo 'active'; } ?>" id="module-<?php echo $i;?>">
                                <div class="ipad-frame">
                                    <img src="<?php echo get_template_directory_uri();?>/dist/images/ipad-frame.png" class="img-fluid frame-img"  />
                                    <img src="<?php echo the_sub_field('image');?>" class="img-fluid ipad-screen" />
                                </div>
                            </div>
                        <?php endwhile;endif;?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <?php if( have_rows('module_sections') ): $i = 0; while ( have_rows('module_sections') ) : the_row();  ?>
                    <?php $i++; ?>
                        <a class="app-link fadein ipad-mod righty" style="<?php if( $i < 3 ) { echo 'display: none !important;'; } ?>" data-id="module-<?php echo $i;?>">
                            <?php echo the_sub_field('copy');?>
                        </a>
                    <?php endwhile;endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc image-bg" style="background:url('<?php echo the_field('download_image');?>') no-repeat center;background-size:cover;">
    <div class="container">
        <div class="cta-entry fadein">
            <?php echo the_field('download_copy');?>
            <a href="<?php echo the_field('download_link');?>" target="_blank" class="btn green-outline">DOWNLOAD</a>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <figure class="leaf smallest"><img src="<?php echo get_template_directory_uri();?>/dist/images/archive.png" class="img-fluid"></figure>
            <?php echo the_field('module_2_title');?>
        </div>
        <div class="app-module">
            <div class="app-img desktop-mod" id="desktop_image">
                <?php if( have_rows('module_2_sections') ): $i = 4; while ( have_rows('module_2_sections') ) : the_row();  $i++; ?>
                    <div class="image-holder desktop-mod">
                    <div class="desktop-frame">
                        <img src="<?php echo get_template_directory_uri();?>/dist/images/desktop-frame.png" class="img-fluid frame-img"  />
                        <img src="<?php echo get_template_directory_uri();?>/dist/images/app_img.jpg" class="img-fluid desktop-screen" />
                    </div>     
                    </div>
                <?php endwhile;endif;?>
            </div>
            <div class="row">
                <?php if( have_rows('module_2_sections') ): $i = 4; while ( have_rows('module_2_sections') ) : the_row();  $i++; ?>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                    <a class="app-link fadein desktop-mod <?php if($i == 6 || $i== 8) { echo 'righty'; } ?> <?php if($i==5) { echo 'active'; } ?>" data-id="module-<?php echo $i;?>" href="#desktop_image">
                        <div class="animated-line line-<?php echo $i;?> <?php if($i == 6 || $i== 8) { echo 'right-line'; } ?>"></div>
                        <?php echo the_sub_field('copy');?>
                    </a>
                    </div>
                <?php endwhile;endif;?>
            </div>
        </div>
    </div>
</section>


<section class="doc testimonials green-bg">
    <div class="container">
        <figure class="testimonial-img fadein">
            <img src="<?php echo the_field('testimonial_image');?>" class="img-fluid rounded-circle" />
        </figure>
        <p class="testimonial fadein">"<?php echo the_field('testimonial_copy');?>"</p>
        <p class="fadein"><?php echo the_field('testimonial_source');?></p>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center">
            <h1 class="bold">Browse LaHaV's Interface:</h1>
        </div>
        <div class="slider-wrap">
            <div class="interface-slider">
            <?php if( have_rows('interface_slider') ): while ( have_rows('interface_slider') ) : the_row();?>
                <div class="slide-item text-center"> 
                    <figure class="entry">
                        <img src="<?php echo the_sub_field('image');?>" class="img-fluid" />
                    </figure>
                    <h3><?php echo the_sub_field('description');?></h3>
                </div>
            <?php endwhile;endif;?>
            </div>    
        </div>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php // get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
