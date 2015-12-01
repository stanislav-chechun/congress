<?php get_header(); ?>
<?php
$image = get_fields('option');
?>
<div id="header" style="background-image: url(<?php echo $image['main_image']['url'] ?>)">
    <div class="border">
        <div class="icons">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 icon">
                        <div class="col-md-6">
                            <div class="col-md-3"><a class="calendar" href="#"></a></div>
                            <div class="col-md-3"><a class="mail" href="#"></a></div>
                            <div class="col-md-3"><a class="map" href="#"></a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="#"><?php echo __('Register Now') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="helper">
        <div class="header-bg">
            <div class="container header-top">
                <div class="row">
                    <div class="col-md-8 left">
                        <h1><?php echo $image['header_text_top'] ?>
                            <span><?php echo $image['header_text_bottom'] ?></span>
                        </h1>
                    </div>
                    <div class="col-md-4 right">
                        <p><?php echo $image['date'] ?></p>
                        <p><?php echo __('CityName, ') . $image['city_name'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php var_dump($image); ?>
<?php get_footer(); ?>