<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<style>
    #df_book_full {
        height: 100vh;
    }
    @media all and ( max-width: 1000px ) {
        #df_book_full {
            height: calc(100vh - 60px);
        }
    }
</style>

<div class="modal fade fullscreen" id="talmudBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-android-close"></i></button>
    </div>
  </div>
</div>

<div class="modal fade fullscreen" id="tanakhBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ion-android-close"></i></button>
      <div class="modal-body">
        <div id="flipbook_2" class="flipbook">
            <?php if( have_rows('second_slider') ): $i = 0;  while ( have_rows('second_slider') ) : the_row();?>
            <?php $i++; ?>
                <div <?php if($i < 1): echo ' class="hard"'; endif;?>><img src="<?php echo the_sub_field('image');?>" class="img-fluid" /></div>
            <?php endwhile;endif;?>
            <div class="hard"></div>
        </div>
      </div>
    </div>
  </div>
</div> 

<!--<div class="_df_book" id="df_book_full" source="http://localhost:8888/lahav/wp-content/uploads/2017/10/pdf.pdf"></div> -->

<section class="doc green-bg leaves-bg" id="more">
    <div class="container">
        <div class="entry text-center fadein">
            <h3 class="white"><?php echo the_field('intro_copy');?></h3>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <h1 class="bold"><?php echo the_field('first_slider_title');?></h1>
        </div>
        <div class="first-row-slider">
            <?php if( have_rows('first_row_books') ): while ( have_rows('first_row_books') ) : the_row();?>
                <div class="slide-item">
                    
                    <div class="row flex-items-xs-middle">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="entry">
                                <?php echo the_sub_field('copy');?>
                                <?php if(get_sub_field('pdf_link')):?>
                                <div class="_df_button btn btn-default pdf_button"
                                 source="<?php echo the_sub_field('pdf_link');?>"
                                 id="df_intro_button">
                                TAKE A LOOK INSIDE</div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <figure class="entry">
                                <img src="<?php echo the_sub_field('image');?>" class="img-fluid" />
                            </figure>
                        </div>
                    </div>                    

                </div> 
            <?php endwhile;endif;?>        
        </div>
    </div>
</section>

<section class="">
    <div class="row flex-items-xs-middle no-gutters">
        <div class="col-xs-12 col-sm-12 col-md-6 red-bg">
            <div class="box-entry">
                <div class="inner-entry">
                <?php echo the_field('left_box_copy');?>
                <a href="http://www.thelehrhaus.com/scholarship/2017/1/9/curriculum-crisis-and-change-towards-a-talmud-curriculum-grounded-in-educational-theory" target="_blank" class="btn btn-green">LEARN MORE</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6" style="background:url('<?php echo the_field('right_box_image');?>') no-repeat center;background-size:cover;">
            <div class="box-entry">
                <div class="inner-entry">
                <?php echo the_field('right_box_copy');?>
                <a href="<?php echo the_field('download_doc');?>" target="_blank" class="btn btn-green">DOWNLOAD</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <h1 class="bold"><?php echo the_field('second_slider_title');?></h1>
        </div>
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry">
                    <?php echo the_field('tanakh_copy');?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="book-hover">
                    <div class="hover-text">LOOK INSIDE</div>
                    <figure class="entry" data-toggle="modal" data-target="#talmudBook">
                        <img src="<?php echo the_field('tanakh_image');?>" class="img-fluid" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc testimonials blue-bg wavy-bg">
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
        <div class="text-center fadein">
            <h1 class="bold"><?php echo the_field('jewish_philosophy_title');?></h1>
        </div>
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry fadein">
                    <?php echo the_field('jewish_philosophy_copy');?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="entry fadein">
                    <img src="<?php echo the_field('jewish_philosophy_image');?>" class="img-fluid" />
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="doc">
    <div class="container">
        <div class="text-center fadein">
            <h1 class="bold"><?php echo the_field('israel_education_title');?></h1>
        </div>
        <div class="row flex-items-xs-middle">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="entry fadein">
                    <?php echo the_field('israel_education_copy');?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <figure class="entry fadein">
                    <img src="<?php echo the_field('israel_education_image');?>" class="img-fluid" />
                </figure>
            </div>
        </div>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php // get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
