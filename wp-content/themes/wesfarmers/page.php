<?php get_header(); the_post(); ?>
        <div id="banner" class="wrapper">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/banner/about-us.jpg" alt="About Us Banner" />
        </div>
            
        
        <section class="wrapper clearfix">
            
            <article class="clearfix">
                <?php the_content(); ?>
            </article>

            <aside>
                <div id="page-title"><span class="sprite"></span><?php the_title(); ?></div>
            </aside>
            
        </section>

        <ul id="footer-logo" class="wrapper clearfix">
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-1.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-2.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-3.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-4.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-5.jpg" alt="Brand Name" /></li>
            <li class="last"><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-6.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-7.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-8.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-9.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-10.jpg" alt="Brand Name" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-11.jpg" alt="Brand Name" /></li>
            <li class="last"><img src="<?php echo get_stylesheet_directory_uri(); ?>/upload/brand/footer-12.jpg" alt="Brand Name" /></li>
        </ul>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>