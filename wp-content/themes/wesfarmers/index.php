<?php get_header(); ?>

        <div id="slideshow" class="wrapper">
            <div id="slider">
                <div class="slide" style="background-image:url(/upload/slide/1.jpg);"></div>
                <div class="slide" style="background-image:url(/upload/slide/2.jpg);"></div>
                <div class="slide" style="background-image:url(/upload/slide/3.jpg);"></div>
                <div class="slide" style="background-image:url(/upload/slide/4.jpg);"></div>
            </div>
            <a href="javascript:;" id="prev" class="sprite"></a>
            <a href="javascript:;" id="next" class="sprite"></a>
        </div>

        <section id="home" class="wrapper clearfix">

                <div id="welcome">
                    
                    <div class="title"><span class="sprite"></span>Welcome</div>
                    <p>
                        We are the insurance division of the Wesfarmers group, founded in 1914 as a Western Australian farmers' cooperative and now one of Australia's largest listed companies. As part of our proud Wesfarmers heritage, we have been providing insurance solutions for over 90 years.  
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
<?php $pods = new Pod('brand'); $pods->findRecords('name ASC', 12); ?>
                <div id="our-brands">
                    <div class="title"><span class="sprite"></span>Our brands</div>
                    <ul class="clearfix">
                        <?php while ($pods->fetchRecord()) : ?>
                        <?php $logo = $pods->get_field('brand_logo'); ?>
                        <li><a href="<?php echo $pods->get_field('brand_website'); ?>" target="_blank"><img src="<?php echo $logo['0']['guid']; ?>" alt="<?php echo $pods->get_field('title'); ?>" /></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>

        </section>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>