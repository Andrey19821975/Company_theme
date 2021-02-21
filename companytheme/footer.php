<footer>
        <div class="container footer--c">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer__menu-wrapper">
                    <?php
	                    if ( function_exists('dynamic_sidebar') )
		                    dynamic_sidebar('sidebar-1');
	                ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__contact-wrapper">
                        <?php
                            if ( function_exists('dynamic_sidebar') )
                                dynamic_sidebar('sidebar-2');
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__form-wrapper">
                        <?php
                            if ( function_exists('dynamic_sidebar') )
                                dynamic_sidebar('sidebar-3');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <div class="container">
                <div class="row">
                    <div class="copy_right__wrapper">
                        <div class="copy_right__text"><?php the_field('copy_right_text');?></div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    
    <?php wp_footer(); ?>
</body>

</html>