<?php
/**
 * Template Name: Our Story Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<section class="doc sec-heading blue-bg text-center" id="more">
    <h1 class="bold white">Our Story</h1>
</section>
<section class="doc">
    <div class="container">
        <div class="entry text-center fadein">
            <h4><?php echo the_field('problem');?></h4>
        </div>
    </div>
</section>

<section class="doc sec-heading green-bg text-center">
    <h1 class="bold white">Our Values</h1>
</section>
<section class="doc">
    <div class="container">
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="entry fadein">
                    <img src="<?php echo get_template_directory_uri();?>/dist/images/Icons-01.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="entry fadein">
                    <h2>Skills</h2>
                    <p><?php echo the_field('skills');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="entry fadein">
                    <img src="<?php echo get_template_directory_uri();?>/dist/images/Icons-02.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="entry fadein">
                    <h2>Relevance</h2>
                    <p><?php echo the_field('relevance');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="entry fadein">
                    <img src="<?php echo get_template_directory_uri();?>/dist/images/Icons-03.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="entry fadein">
                    <h2>Collaboration</h2>
                    <p><?php echo the_field('collaboration');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="entry fadein">
                    <img src="<?php echo get_template_directory_uri();?>/dist/images/Icons-04.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="entry fadein">
                    <h2>Excellence</h2>
                    <p><?php echo the_field('excellence');?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc sec-heading red-bg text-center">
    <h1 class="bold white">Our Team</h1>
</section>

<section class="doc">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figrue class="entry team-img fadein">
                    <img src="<?php echo the_field('noam_image');?>" class="img-fluid" />
                    <div class="team-desc left">
                        <h2 class="team-name">Dr. Noam Weissmam</h2>
                        <p class="team-meta italic">Founder and Director</p>
                    </div>
                </figrue>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry">
                    <?php echo the_field('noam_bio');?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="row flex-items-xs-middle ">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figrue class="entry team-img fadein">
                    <img src="<?php echo the_field('david_image');?>" class="img-fluid" />
                    <div class="team-desc">
                        <h2 class="team-name">Rabbi David Stein</h2>
                        <p class="team-meta italic">Co-Founder and Managing Director</p>
                    </div>
                </figrue>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry">
                    <?php echo the_field('david_bio');?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc blue-bg">
    <div class="container">
        <div class="entry video-wrap">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo the_field('video_id');?>"></iframe>
            </div>     
        </div>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php // get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
