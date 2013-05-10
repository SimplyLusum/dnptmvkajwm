<?php get_header(); ?>

        <div id="slideshow" class="wrapper">
            <div id="slider">
                <div class="slide" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/upload/slide/1.jpg);">
                    <div class="content">
                        <div class="title">OUR CHARTER</div>
                        <p>
                            Donec eget diam euismod mi iaculis varius. Proin  felis vel odio tempus malesuada at sed mauris. Dolor sit amet consectur lorem ipsum dolor sit phasellus eget erat. 
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/upload/slide/2.jpg);">
                    <div class="content">
                        <div class="title">Mollis Consectetur</div>
                        <p>
                            Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                        </p>
                    </div>
                </div>
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
                <div id="latest-news">
                    <div class="title"><span class="sprite"></span>Latest news</div>
                    <ul>
                        <li>
                            <div class="title">Dolor sit amet news title</div>
                            <p>
                                Donec eget diam euismod mi iaculis varius. Proin a felis vel odio tempus malesuada at sed. 
                                <a href="#">Read more &nbsp;&nbsp;</a>
                            </p>
                        </li>
                        <li>
                            <div class="title">Consecterur lorem ipsum</div>
                            <p>
                                Phasellus eget aliquam erat. Phasell justo mi, aliquam sit amet mollis et, accumsan at nulla.
                                <a href="#">Read more &nbsp;&nbsp;</a>
                            </p>
                        </li>
                        <li>
                            <div class="title">Consecterur lorem ipsum</div>
                            <p>
                                Phasellus eget aliquam erat. Phasell justo mi, aliquam sit amet mollis et, accumsan at nulla.
                                <a href="#">Read more &nbsp;&nbsp;</a>
                            </p>
                        </li>
                        <li class="last clearfix"><a href="#">More news &nbsp;&nbsp;</a></li>
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