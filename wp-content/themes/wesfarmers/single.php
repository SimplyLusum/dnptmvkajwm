<?php get_header(); the_post(); ?>
        <div id="banner" class="wrapper">
           <img src="<?php echo get_stylesheet_directory_uri();  ?>/upload/banner/about-us.jpg" />
        </div>
            
        
        <section class="wrapper clearfix">
            
            <article class="clearfix">
                <?php the_content(); ?>
            </article>

            <aside>
                <div id="page-title"><span class="sprite"></span><?php the_title(); ?></div>
            </aside>
            
        </section>
<?php $counter = 0; ?>
<?php $pods = new Pod('brand'); $pods->find(array('limit' => -1, 'orderby' => 'brand_sort_order ASC')); ?>
        <ul id="footer-logo" class="wrapper clearfix">
            <?php while ($pods->fetchRecord()) : ?>
            <?php if ($pods->get_field('show_in_footer') == '1') : ?>
            <?php $logo = $pods->get_field('brand_logo'); ?>
            <li<?php echo ($counter == 6 || $counter == 12)?' class="last"':''; ?>><a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" /></a></li>
            <?php endif; ?>
            <?php $counter++; ?>
            <?php endwhile; ?>
        </ul>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>