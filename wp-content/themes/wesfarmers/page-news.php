<?php get_header(); the_post(); ?>
        <div id="banner" class="wrapper">
           <?php the_post_thumbnail( 'full' ); ?> 
        </div>
            
        
        <section class="wrapper clearfix">
            
            <article class="clearfix">
                <?php the_content(); ?>
                <ul id="news-list" class="clearfix">
<?php $counter = 0; ?>
<?php $pods = new Pod('news'); $pods->find(array('limit' => -1, 'orderby' => 'post_date DESC')); ?>
                    <?php while ($pods->fetchRecord()) : ?>
                    <li id="<?php echo $pods->get_field('post_name'); ?>">
                        <div class="title"><a href="<?php echo $pods->get_field('guid'); ?>"><?php echo $pods->get_field('title'); ?></a></div>
                        <div class="date"><?php echo date('d/m/Y', strtotime($pods->get_field('post_date'))); ?></div>
                        <?php $content = $pods->get_field('content'); 
                        if (strlen($content) > 164) {
                            $trailer = '...';
                        } else {
                            $trailer = '';
                        }
                        ?>
                        <div class="content"><?php echo substr($pods->get_field('content'), 0, 164).$trailer; ?></div>
                        <div class="content"><a href="<?php echo $pods->get_field('guid'); ?>">Read more</a></div>
                        <br />
                    </li>
                    <?php endwhile; ?>
                </ul>
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