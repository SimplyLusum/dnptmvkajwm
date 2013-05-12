<?php get_header(); the_post(); ?>
        <div id="banner" class="wrapper">
           <?php the_post_thumbnail( 'full' ); ?> 
        </div>
            
        
        <section class="wrapper clearfix">
<?php $counter = 0; ?>
<?php $pods = new Pod('brand'); $pods->findRecords('name ASC', 12); ?>            
            <article class="clearfix">
                <?php the_content(); ?>
                <ul id="contact-list" class="clearfix">
                    <?php while ($pods->fetchRecord()) : ?>
                    <?php $logo = $pods->get_field('brand_logo'); ?>
                    <li>
                        <div class="left">
                            <img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" />
                        </div>
                        <div class="right">
                            <h4><?php echo $pods->get_field('title'); ?></h4>
                            <?php echo $pods->get_field('brand_address'); ?>
                            Telephone: <?php echo $pods->get_field('brand_phone'); ?><br />
                            Facsimile: <?php echo $pods->get_field('brand_fax'); ?><br />
                            Website: <a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><?php echo $pods->get_field('brand_website'); ?></a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </article>

            <aside>
                <div id="page-title"><span class="sprite"></span><?php the_title(); ?></div>
            </aside>
            
        </section>
<?php $counter = 0; ?>
<?php $pods = new Pod('brand'); $pods->find(array('limit' => 13, 'orderby' => 'post_date DESC')); //$pods->findRecords('name ASC', 12); ?>
        <ul id="footer-logo" class="wrapper clearfix">
            <?php while ($pods->fetchRecord()) : ?>
            <?php if ($pods->get_field('show_in_footer')) : ?>
            <?php $logo = $pods->get_field('brand_logo'); ?>
            <li<?php echo ($counter == 5 || $counter == 11)?' class="last"':''; ?>><a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" /></a></li>
            <?php endif; ?>
            <?php $counter++; ?>
            <?php endwhile; ?>
        </ul>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>