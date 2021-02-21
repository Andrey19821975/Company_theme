<?php get_header(); ?>

    <section class="top_slider">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="top-slider__wrapper">
                        <div class="top-slider__block">
                        <?php
	                        global $post;
	                        $args = array( 'numberposts' => -1, 'post_type'=>'agc_sliders','order'=>'ASC','orderby'=>'date' );
	                        $myposts = get_posts( $args );
	                        foreach( $myposts as $post ){
		                    setup_postdata($post);
		                    ?>
		                    <div class="top-slider__item">
                                <h1 class="top_caption"><?php the_title();?></h1>
                                <p class="block__text"><?php the_content();?></p>
                            </div>    
		                    <?php
	                        }
	                        wp_reset_postdata();
	                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="benefits__list">
                        <div class="benefits__block">
                            <div class="benefits__wrapper">
                            <?php
                                $benef = get_field('benefit_1');
                                if( $benef ):?>
                                    <div class="benefits__block-icon"><img src="<?php echo $benef['icon']; ?>" alt="" class="regular">
                                    <img src="<?php echo $benef['icon_hover']; ?>" alt="" class="hover">
                                    </div>
                                    <h2 class="benefits__block-heading"><?php echo $benef['сaption']; ?></h2>
                                    <div class="benefits__block-text"><?php echo $benef['text']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="benefits__block">
                            <div class="benefits__wrapper">
                            <?php
                                $benef = get_field('benefit_2');
                                if( $benef ):?>
                                    <div class="benefits__block-icon"><img src="<?php echo $benef['icon']; ?>" alt="" class="regular">
                                    <img src="<?php echo $benef['icon_hover']; ?>" alt="" class="hover">
                                    </div>
                                    <h2 class="benefits__block-heading"><?php echo $benef['сaption']; ?></h2>
                                    <div class="benefits__block-text"><?php echo $benef['text']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="benefits__block">
                            <div class="benefits__wrapper">
                            <?php
                                $benef = get_field('benefit_3');
                                if( $benef ):?>
                                    <div class="benefits__block-icon"><img src="<?php echo $benef['icon']; ?>" alt="" class="regular">
                                    <img src="<?php echo $benef['icon_hover']; ?>" alt="" class="hover">
                                    </div>
                                    <h2 class="benefits__block-heading"><?php echo $benef['сaption']; ?></h2>
                                    <div class="benefits__block-text"><?php echo $benef['text']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="benefits__block">
                            <div class="benefits__wrapper">
                            <?php
                                $benef = get_field('benefit_4');
                                if( $benef ):?>
                                    <div class="benefits__block-icon"><img src="<?php echo $benef['icon']; ?>" alt="" class="regular">
                                    <img src="<?php echo $benef['icon_hover']; ?>" alt="" class="hover">
                                    </div>
                                    <h2 class="benefits__block-heading"><?php echo $benef['сaption']; ?></h2>
                                    <div class="benefits__block-text"><?php echo $benef['text']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="portfolio__caption">PORTFOLIO</h2>
                </div>
            </div>
        </div>
        <div class="portfolios__wrapper">
            <div class="owl-carousel">
            <?php
                global $post;
                $args = array( 'numberposts' => -1, 'post_type'=>'agc_portfolios','order'=>'ASC','orderby'=>'date' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);
                    ?>
                    <a href="<?php the_permalink();?>">
                    <div class="porfolios__item">
                        <div class="portfolio__image-wrapper"><img src="<?php the_post_thumbnail_url('full');?>" alt=""></div>
                        <div class="portfolio__name-wrapper"><?php the_title();?></div>
                    </div>
                    </a>
                    <?php
                }
                wp_reset_postdata();
            ?>	
            </div>
        </div>
    </section>
    <section class="what">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="what__caption"><?php echo esc_html( get_the_title() );?></h2>
                </div>
            </div>
            <div class="row white">
                <div class="col col-img">
                    <div class="what__image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></div>
                </div>
                <div class="col col-text">
                    <div class="what__text-wrapper"><?php
                    $post = get_post();
                    echo $post->post_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>