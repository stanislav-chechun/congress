<?php get_header(); ?>
<?php
global $post;
$options = get_fields('option');
$carousel_args = array('post_type' => 'sponsorships', 'post_status' => 'publish', 'posts_per_page' => -1);
$carousel = get_posts($carousel_args);
?>
<div class="container-fluid" id="welcome-first" style="background-image: url(<?php echo $options['main_image']['url'] ?>);">
    <div id="border-first"></div>
    <div class="row" id="top-first">
        <div class="col-md-7 col-sm-7 col-xs-7 mobile">
            <div id="text-first">
                <h1><?php echo $options['header_text_top'] ?>
                    <strong><?php echo $options['header_text_bottom'] ?></strong></h1>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 mobile" id="date-first">
            <h2><?php
                $originalDate = $options['date'];
                echo sprintf('<strong>%s</strong> %s', date('d M', strtotime($originalDate)), date(' Y ', strtotime($originalDate)));
                echo __('CityName')
                ?>, <strong><?php echo $options['city_name'] ?></strong></h2>
        </div>

    </div>

    <div class="row" id="bottom-first">
        <div class="col-md-6 col-sm-6 col-xs-6" id="dynamic-links">
            <ul class="list-inline">
                <li><a href="<?php echo $options['data_icon'] ?>"><img src="<?php echo get_template_directory_uri() ?>/images/calendar.png" alt="Calendar" /></a></li>
                <li><a href="<?php echo $options['mail_icon'] ?>"><img src="<?php echo get_template_directory_uri() ?>/images/mail.png" alt="Mail" /></a></li>
                <li><a href="<?php echo $options['map_icon'] ?>"><img src="<?php echo get_template_directory_uri() ?>/images/map.png" alt="Map" /></a></li>
            </ul> 
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6" id="button-first">
            <a href="<?php echo $options['register_button'] ?>" class="button" id="register-now">Register now</a>
        </div>

    </div>



</div>
<div class="container-fluid" id="welcome-to-name-congress">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul role="tablist">
                <li><a href="#home" alt="" role="tab" data-toggle="tab">HOME</a></li>
                <li><a href="#congress-information" alt="" role="tab" data-toggle="tab">CONGRESS INFORMATION</a></li>
                <li><a href="#program" alt="" role="tab" data-toggle="tab">PROGRAM</a></li>
                <li><a href="#registration" alt="" role="tab" data-toggle="tab">REGISTRATION</a></li>
                <li><a href="#accomodation" alt="" role="tab" data-toggle="tab">ACCOMODATION</a></li>
                <li><a href="#sponsors-exhibitors" alt="" role="tab" data-toggle="tab">SPONSORS & EXHIBITORS</a></li>
                <li><a href="#endorsements" alt="" role="tab" data-toggle="tab">ENDORSEMENTS</a></li>
                <li><a href="#contact-us" alt="" role="tab" data-toggle="tab">CONTACT US</a></li>
            </ul>			
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="congress-information">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-2</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="program">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-3</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="registration">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-4</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="accomodation">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-5</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>	
            <div role="tabpanel" class="tab-pane" id="sponsors-exhibitors">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-6</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="endorsements">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-7</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>
            <div role="tabpanel" class="tab-pane" id="contact-us">
                <ul>
                    <li><a href="#" alt="">LOREM IPSUM-8</a></li>
                    <li><a href="#" alt="">DOLOR SIT AMET</a></li>
                    <li><a href="#" alt="">CONSECTETUR</a></li>
                    <li><a href="#" alt="">ADIPISCING</a></li>
                </ul>	
            </div>				
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p id="caption-wtnc">WELCOME TO NAME CONGRESS</p>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
            <p>Lorem ipsum dolor sit amet, consectetur adip-iscing elit. Nulla ultrices augue lacus, vitae elementum nulla consectetur vitae. Nulla commondo dignissim lacus, ac scelerisque risus ultrices vel. Phasellus fermentum rhoncus tellus.</p>
            <p>It tincidunt nulla finibus a. Nunc turpis odio, luctus sit amet elementum in, ultricies et urna. Ut vel felis at justo suscipit efficitur nec sit amet orci. Aliquam auctor nibh et soiiicitudin porta. Aenean bibendum dolor vitae odio lacinia tempus. Morbi luctus risus in mollis</p>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12 slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="<?php echo get_template_directory_uri() ?>/img/carousel1_item.png" class="light-box"><img src="<?php echo get_template_directory_uri() ?>/img/carousel1_item.png" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="<?php echo get_template_directory_uri() ?>/img/carousel1_item.png" class="light-box"><img src="<?php echo get_template_directory_uri() ?>/img/carousel1_item.png" alt=""></a>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>	
        <div class="col-md-12 col-sm-12 col-xs-12" id="buttons-block">
            <a href="#" class="btn-blue" alt="">READ MORE</a>
            <a href="#" class="btn-blue" alt="">ANOTHER CTA BUTTON</a>
        </div>
    </div>			
</div>
<div class="container-fluid" id="newslwtter">
    <h3>Official newsletter</h3>
    <div class="row">

    </div>
</div>
<div class="container-fluid" id="program-block">
    <h3>Program</h3>
    <div class="col-md-10 col-xs-12 col-centered">
        <ul class="nav nav-tabs" role="tablist">
            <li class="col-md-4 col-sm-4  col-xs-12 active" ><div class="col-md-12 col-xs-12"><a href="#day-1" aria-controls="day-1" role="tab" data-toggle="tab"><span>Day 1#</span></a></div></li>
            <li class="col-md-4 col-sm-4  col-xs-12 " ><div class="col-md-12 col-xs-12"><a href="#day-2" aria-controls="day-2" role="tab" data-toggle="tab"><span>Day 2#</span></a></div></li>
            <li class="col-md-4 col-sm-4  col-xs-12 " ><div class="col-md-12 col-xs-12"><a href="#day-3" aria-controls="day-3" role="tab" data-toggle="tab"><span>Day 3#</span></a></div></li>
        </ul>
    </div>

    <!-- Tab panes -->
    <div class="tab-content ">
        <div role="tabpanel" class="tab-pane fade active in" id="day-1">
            <div class="main-tab tab-center">
                <div class="main-block">
                    <div class="hepler">
                        <div class="time">
                            <span>10.30-14.40</span>
                        </div>
                        <div class="text">
                            <h4>Session 1</h4>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                        </div>

                        <div class="button">
                            <a href="#" class="opened">Rewiew</a>
                            <a class="closed" href="#">Close X</a>
                        </div>
                    </div>    
                    <div class="slide">
                        <div class="text">
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                        </div>
                    </div>
                </div>               
            </div> 
            <div class="main-tab tab-center  breakfest">    
                <div class="main-block breakfest">
                    <div class="hepler">
                        <div class="time"><span>10.30-14.40</span></div>
                        <div class="text">
                            <p>LoremIpsum Dolore Ipsum Fa fa fa</p>
                        </div>

                        <div class="button">

                        </div>
                    </div>
                </div> 
            </div>     
        </div> 
    </div>
</div>
<div class="container-fluid" id="sponsorship-block">
    <h3>Spnosrships</h3>
    <div class="grid-max col-xs-12 col-centered">
        <div class="owl-carousel">
            <?php
            foreach ($carousel as $item) {
                setup_postdata($post);
                ?>
                <div><?php echo get_the_post_thumbnail($item->ID); ?></div>
            <?php }
            ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="speakers-block">
    <div class="speakers-block-top">
        <h3>Speakers</h3>
    </div>
    <div class="row row-centered row-background">
        <div class="col-md-8 col-xs-12 col-centered">
            <?php
            global $post;
            $args = array('post_type' => 'speakers', 'numberposts' => -1);
            $posts = get_posts($args);
            foreach ($posts as $post) {
                setup_postdata($post);
                $data = get_post_meta(($post->ID), '', true);
                ?>    
                <div id="<?php the_ID() ?>" class="col-md-4 text-center speaker">
                    <div class="helper">
                    <?php the_post_thumbnail() ?>
                    </div>    
    <?php //var_dump($data)  ?>
                    <p class="first-text"><?php echo $data['fisrt_name']['0'] ?> <span> <?php echo $data['last_name']['0'] ?></span></p>
                    <p><?php echo __('Specialization') . ' ' . $data['specilization']['0'] ?>,<span><?php echo $data['country']['0'] ?></span></p>
                </div>
<?php } ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="registration-block">
    <div class="row ">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Registration</h3>
        </div>
    </div>
    <div class="row">
        <?php
        global $post;
        $args = array('post_type' => 'registrations', 'numberposts' => 3);
        $posts = get_posts($args);
        foreach ($posts as $post) {

            setup_postdata($post);
            congress_registration_data($post->ID);
        }
        ?>

    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 bold">
<?php echo $options['left_text'] ?>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
<?php echo $options['right_text'] ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="welcome-to-singapore">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-8 col-centered">  
                <ul id="tabs-bottom" class="nav nav-tabs" role="tablist">
                    <li class="col-md-3 active">
                        <a href="<?php echo '#' . $options['id_item_menu_1'] ?>" aria-controls="getting" role="tab" data-toggle="tab"><?php echo $options['first_item_menu_1'] ?></a>
                    </li>
                    <li class="col-md-3">
                        <a href="<?php echo '#' . $options['id_item_menu_2'] ?>" aria-controls="city" role="tab" data-toggle="tab"><?php echo $options['first_item_menu_2'] ?></a>
                    </li>
                    <li class="col-md-3">
                        <a href="<?php echo '#' . $options['id_item_menu_3'] ?>" aria-controls="conference" role="tab" data-toggle="tab"><?php echo $options['first_item_menu_3'] ?></a>
                    </li>
                    <li class="col-md-3">
                        <a href="<?php echo '#' . $options['id_item_menu_4'] ?>" aria-controls="arrival" role="tab" data-toggle="tab"><?php echo $options['first_item_menu_4'] ?></a>
                    </li>
                </ul>
            </div>    
        </div>      
    </div>
    <div class="tab-content">  
        <div role="tabpanel" class="tab-pane fade in active" id="<?php echo $options['id_item_menu_1'] ?>">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts"><?php echo $options['content_text_top_1'] ?></p>
<?php echo $options['main_content_1'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo $options['read_more_button_one'] ?>" class="btn-blue" alt=""><?php echo __('READ MORE') ?></a>
                    <a href="<?php echo $options['another_button_one'] ?>" class="btn-blue" alt=""><?php echo __('ANOTHER CTA BUTTON') ?></a>
                </div>
            </div> 
        </div>
        <div role="tabpanel" class="tab-pane fade" id="<?php echo $options['id_item_menu_2'] ?>">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts"><?php echo $options['content_text_top_2'] ?></p>
<?php echo $options['main_content_2'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo $options['read_more_button_two'] ?>" class="btn-blue" alt=""><?php echo __('READ MORE') ?></a>
                    <a href="<?php echo $options['another_button_two'] ?>" class="btn-blue" alt=""><?php echo __('ANOTHER CTA BUTTON') ?></a>
                </div>
            </div> 
        </div>
        <div role="tabpanel" class="tab-pane fade" id="<?php echo $options['id_item_menu_3'] ?>">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts"><?php echo $options['content_text_1'] ?></p>
<?php echo $options['main_content_3'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo $options['read_more_button_three'] ?>" class="btn-blue" alt=""><?php echo __('READ MORE') ?></a>
                    <a href="<?php echo $options['another_button_three'] ?>" class="btn-blue" alt=""><?php echo __('ANOTHER CTA BUTTON') ?></a>
                </div>
            </div> 
        </div>
        <div role="tabpanel" class="tab-pane fade" id="<?php echo $options['id_item_menu_4'] ?>">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts"><?php echo $options['content_text_2'] ?></p>
<?php echo $options['main_content_4'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo $options['read_more_button_four'] ?>" class="btn-blue" alt=""><?php echo __('READ MORE') ?></a>
                    <a href="<?php echo $options['another_button_four'] ?>" class="btn-blue" alt=""><?php echo __('ANOTHER CTA BUTTON') ?></a>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="container-fluid" id="bioevents-contacts">
    <div class="row">
        <div class="col-md-offset-1 col-md-3 col-sm-4 col-xs-12 text-align-center">
            <a href="#" class="logo">
                <img src="<?php echo $options['logo']['url'] ?>" alt="<?php echo $options['logo']['alt'] ?>">
            </a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 border-left-blue">
            <p><?php echo $options['name_for_one'] ?></p>
            <p><?php echo $options['office_for_one'] ?></p>
            <p><?php echo $options['telephone_for_one'] ?></p>
            <p><?php echo $options['email_for_one'] ?></p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
            <p><?php echo $options['name'] ?></p>
            <p><?php echo $options['office'] ?></p>
            <p><?php echo $options['telephone'] ?></p>
            <p><?php echo $options['email'] ?></p>
        </div>
    </div>
</div>
<div class="container-fluid" id="rights">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p><?php echo $options['copyright'] ?></p>
        </div>
    </div>
</div>
<!-- pop-ups -->
<?php
global $post;
$args = array('post_type' => 'speakers', 'numberposts' => -1);
$posts = get_posts($args);
foreach ($posts as $post) {
    setup_postdata($post);
    ?>
    <div class="container-fluid main-popup <?php the_ID() ?>">
        <div class="row">
            <div class="col-md-8 popup col-centered">
                <div class="col-md-4 image"><?php the_post_thumbnail() ?></div>
    <?php the_content() ?>    
                <a class="close-popup">Close X</a>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>