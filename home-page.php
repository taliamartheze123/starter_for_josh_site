<?php
    /*
    Template Name: Home page
    */
    ?>    
<?php get_header(); ?>   <!--  Tells WordPress to include header.php -->



    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

            <div class="blocker"></div>

        </div>
    </section>

    <section class="container-fluid articlebg">
        <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3></h3>
        </div><!-- CONTAINER -->

        <div class="row">
            <div class="col-md-4">
            <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
            <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
            <p class="date" ><?php the_field('articledate'); ?></p>
            <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>

            <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>

            <div class="col-md-4">
            <img class="img-fluid" alt=“model” src="<?php the_field('modelimage');?>">

            <h4 class="article-title"><?php the_field('modeltitle'); ?></h4>
            <p class="date" ><?php the_field('modeldate'); ?></p>
            <p class="article-p"><?php the_field('modelexcerpt'); ?> </p>

            <a href="<?php the_field('modelreadmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>

            <div class="col-md-4">
            <img class="img-fluid" alt=“leaf” src="<?php the_field('leafimage');?>">

            <h4 class="article-title"><?php the_field('leaftitle'); ?></h4>
            <p class="date" ><?php the_field('leafdate'); ?></p>
            <p class="article-p"><?php the_field('leafexcerpt'); ?> </p>

            <a href="<?php the_field('leafreadmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>

            </div>
        </div><!-- row -->

    </section>
    <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->