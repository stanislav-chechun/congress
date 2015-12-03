<?php get_header(); ?>
<?php
global $post;
$image = get_fields('option');
$carousel_args = array('post_type' => 'sponsorships', 'post_status' => 'publish', 'posts_per_page' => -1);
$carousel = get_posts($carousel_args);
?>
<div class="container-fluid" id="newslwtter">
    <h3>Official newsletter</h3>
    <div class="row">

    </div>
</div>
<div class="container-fluid" id="program-block">
    <h3>Program</h3>
    <div class="col-md-10 col-xs-12 col-centered">
        <ul class="nav nav-tabs" role="tablist">
            <li class="col-md-4 col-xs-12 active" ><div class="col-md-12 col-xs-12"><a href="#day-1" aria-controls="day-1" role="tab" data-toggle="tab"><span>Day 1#</span></a></div></li>
            <li class="col-md-4 col-xs-12 " ><div class="col-md-12 col-xs-12"><a href="#day-2" aria-controls="day-2" role="tab" data-toggle="tab"><span>Day 2#</span></a></div></li>
            <li class="col-md-4 col-xs-12 " ><div class="col-md-12 col-xs-12"><a href="#day-3" aria-controls="day-3" role="tab" data-toggle="tab"><span>Day 3#</span></a></div></li>
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
            <div id="382" class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div>    
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
            <div class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div> 
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
            <div class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div> 
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
            <div class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div> 
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
            <div class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div> 
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
            <div class="col-md-4 text-center speaker">
                <div class="helper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png">
                </div> 
                <p class="first-text">First name <span>Last Name</span></p>
                <p>First name <span>Last Name</span></p>
            </div>
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
        <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="title-reg">PHYSICIAN / ACADEMIC</p>
            <p><span class="color-grey">$450</span>Early Registration prior to and until 31 July, 2015</p>
            <p><span class="color-grey">$540</span>Regular Registration From 1 August, until 13 October, 2015</p>
            <p><span class="color-blue">$650</span>On-site Registration</p>
            <a href="#" class="btn-green" alt="">REGISTER NOW</a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="title-reg">PHYSICIAN / ACADEMIC</p>
            <p><span color-blue>$450</span>Early Registration prior to and until 31 July, 2015</p>
            <p><span class="color-grey">$540</span>Regular Registration From 1 August, until 13 October, 2015</p>
            <p><span class="color-grey">$650</span>On-site Registration</p>
            <a href="#" class="btn-green" alt="">REGISTER NOW</a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="title-reg">FULL PARTICIPANT</p>
            <p><span>$800</span>Early Registration prior to and until 31 July, 2015</p>
            <p><span class="color-grey">$950</span>Regular Registration From 1 August, until 13 October, 2015</p>
            <p><span class="color-grey">$1,100</span>On-site Registration</p>
            <a href="#" class="btn-green" alt="">REGISTER NOW</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="bold">Registration Fee includes:</p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <ul>
                <li><p>Admission to all scientific sessions</p></li>
                <li><p>Industry exhibition</p></li>
                <li><p>Congress material</p></li>
                <li><p>Coffee & lunch breaks</p></li>
                <li><p>Optional: One on One meetings with KOL - pre-scheduled upon request</p></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" id="welcome-to-singapore">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-8 col-centered">  
                <ul id="tabs-bottom" class="nav nav-tabs" role="tablist">
                    <li class="col-md-3 active"><a href="#getting" aria-controls="getting" role="tab" data-toggle="tab">GETTING AROUND</a></li>
                    <li class="col-md-3"><a href="#city" aria-controls="city" role="tab" data-toggle="tab">CITY SIGHTSEEING</a></li>
                    <li class="col-md-3"><a href="#conference" aria-controls="conference" role="tab" data-toggle="tab">CONFERENCE LOCATION</a></li>
                    <li class="col-md-3"><a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">ARRIVAL FROM AIRPORT</a></li>
                </ul>
            </div>    
        </div>      
    </div>
    <div class="tab-content">  
        <div role="tabpanel" class="tab-pane fade in active" id="getting">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts">WELCOME TO SINGAPORE</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Nulla ultrices augue lacus, vitae elementum nulla consectetur vitae. Nulla commodo dignissim lacus ac scelerisque nsus ultrices vel. Phasellus fermentum rhoncus tellus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="#" class="btn-blue" alt="">READ MORE</a>
                    <a href="#" class="btn-blue" alt="">ANOTHER CTA BUTTON</a>
                </div>
            </div> 
        </div>
        <div role="tabpanel" class="tab-pane fade" id="city">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="caption-wts">City</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Nulla ultrices augue lacus, vitae elementum nulla consectetur vitae. Nulla commodo dignissim lacus ac scelerisque nsus ultrices vel. Phasellus fermentum rhoncus tellus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="#" class="btn-blue" alt="">READ MORE</a>
                    <a href="#" class="btn-blue" alt="">ANOTHER CTA BUTTON</a>
                </div>
            </div> 
        </div> 
    </div>
</div>
<div class="container-fluid" id="bioevents-contacts">
    <div class="row">
        <div class="col-md-offset-1 col-md-3 col-sm-4 col-xs-12 text-align-center">
            <a href="#" class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo_bioevents.png" alt="Website" />
            </a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 border-left-blue">
            <p>BioEvents UK</p>
            <p>UK Office</p>
            <p>Tel: +44-203-051-4032</p>
            <p>email: info@bioevents.net</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
            <p>BioEvents USA</p>
            <p>Boston Office</p>
            <p>Tel: + 1-857-400-0035</p>
            <p>Fax: +44-203-051-4032</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="rights">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p>© Congress Name. All Rights Reserved 2015</p>
        </div>
    </div>
</div>
<!-- pop-ups -->
<div class="container-fluid main-popup 382">
    <div class="row">
        <div class="col-md-8 popup col-centered">
            <div class="col-md-4 image"><img src="<?php echo get_template_directory_uri() ?>/images/face.png"></div>
            <div class="col-md-8 text">
                <p class="name">First Name LastName</p>
                <p class="spec">Specialization NameTitle, Country</p>
                <p class="name bio">Bio:</p>
                <p>"Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p></div>
            <a class="close-popup">Close X</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>