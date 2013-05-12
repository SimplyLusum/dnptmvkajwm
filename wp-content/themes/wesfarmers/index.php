<?php get_header(); ?>
        <?php $pods = new Pod('slider_image'); $pods->findRecords('slider_image_sort_order ASC', 20); ?>
        <div id="slideshow" class="wrapper">
            <div id="slider">
                <?php while ($pods->fetchRecord()) : ?>
                <?php $slide = $pods->get_field('slider_image'); ?>
                <div class="slide" style="background-image:url(<?php echo $slide['0']['guid']; ?>);"></div>
                <?php endwhile; ?>
            </div>
            <a href="javascript:;" id="prev" class="sprite"></a>
            <a href="javascript:;" id="next" class="sprite"></a>
        </div>

        <section id="home" class="wrapper clearfix">
                 <?php $welcomepage = get_page( 106 ) ?> 
                <div id="welcome">
                    <div class="title"><span class="sprite"></span><?php echo $welcomepage->post_title; ?></div>
                    <p>
                        <?php echo $welcomepage->post_content; ?>
                    </p>
                </div>
            <?php $pods = new Pod('news'); $pods->findRecords('post_date DESC', 3); ?>
                <div id="latest-news">
                    <div class="title"><span class="sprite"></span>Latest news</div>
                    <ul>
                        <?php while ($pods->fetchRecord()) : ?>
                        <li>
                            <div class="title"><a href="/news/#<?php echo $pods->get_field('post_name'); ?>"><?php echo $pods->get_field('title'); ?></a></div>
                            <p>
                                <?php echo substr($pods->get_field('content'), 0, 84).'...'; ?><br />
                                <a href="/news">Read more &nbsp;&nbsp;</a>
                            </p>
                        </li>
                        <?php endwhile; ?>
                        <li class="last clearfix"><a href="/news">More news &nbsp;&nbsp;</a></li>
                    </ul>
                </div>
<?php $pods = new Pod('brand'); $pods->find(array('limit' => 13, 'orderby' => 'post_date DESC'));  // $pods->findRecords('post_date DESC', 12); ?>
                <div id="our-brands">
                    <div class="title"><span class="sprite"></span>Our brands</div>
                    <ul class="clearfix">
                        <?php while ($pods->fetchRecord()) : ?>
                        <?php if ($pods->get_field('show_in_home')) : ?>
                        <?php $logo = $pods->get_field('brand_logo'); ?>
                        <li><a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" /></a></li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>

        </section>

<?php get_footer(); ?>