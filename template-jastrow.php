<?php
/**
 * Template Name: Jastrow Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<section class="doc green-bg leaves-bg" id="more">
    <div class="container">
        <div class="entry text-center fadein">
            <h4 class="white"><?php echo the_field('intro_copy');?></h4>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <h1 class="bold">LaHaV’s Jastrow Dictionary</h1>
        </div>
        <div class="entry">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="<?php echo get_template_directory_uri();?>/dictionary/index.html"></iframe>
            </div>     
        </div>
    </div>
</section>
