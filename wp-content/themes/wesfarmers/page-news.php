<?php get_header(); the_post(); ?>
        <div id="banner" class="wrapper">
           <?php the_post_thumbnail( 'full' ); ?> 
        </div>
            
        
        <section class="wrapper clearfix">
            
            <article class="clearfix">
                <?php the_content(); ?>
                <ul id="news-list" class="clearfix">
<?php $counter = 0; ?>
<?php $pods = new Pod('news'); $pods->findRecords('post_date DESC', 12); ?>
                    <?php while ($pods->fetchRecord()) : ?>
                    <li id="<?php echo $pods->get_field('post_name'); ?>">
                        <div class="title"><?php echo $pods->get_field('title'); ?></div>
                        <div class="date"><?php echo date('d/m/Y', strtotime($pods->get_field('post_date'))); ?></div>
                        <div class="content"><?php echo $pods->get_field('content'); ?></div>
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
<?php $pods = new Pod('brand'); $pods->findRecords('name ASC', 12); ?>
        <ul id="footer-logo" class="wrapper clearfix">
            <?php while ($pods->fetchRecord()) : ?>
            <?php $logo = $pods->get_field('brand_logo'); ?>
            <li<?php echo ($counter == 5 || $counter == 11)?' class="last"':''; ?>><a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" /></a></li>
            <?php endwhile; ?>
        </ul>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>