<?php require $themeurl.'views/home/slider.php';?>
<div class="clearfix"></div>
<div class="container">
    <div class="features hidden-sm hidden-xs">
        <div class="row slidericons">
            <div data-wow-duration="0.1s" data-wow-delay="0.9s" class="wow fadeInUp col-md-3">
                <div class="row">
                    <div class="col-md-4 row">
                        <i data-wow-duration="1s" data-wow-delay="1s" class="homeicons wow fadeInUp icon_set_1_icon-23"></i>
                    </div>
                    <div class="col-md-8">
                        <h4><?php echo trans('0380');?></h4>
                    </div>
                </div>
            </div>
            <div data-wow-duration="0.5s" data-wow-delay="0.9s" class="wow fadeInUp col-md-3">
                <div class="row">
                    <div class="col-md-4">
                        <i data-wow-duration="1.2s" data-wow-delay="1.2s" class="homeicons wow fadeInUp icon_set_1_icon-94"></i>
                    </div>
                    <div class="col-md-8 row">
                        <h4><?php echo trans('0382');?></h4>
                    </div>
                </div>
            </div>
            <div data-wow-duration="0.9s" data-wow-delay="0.9s" class="wow fadeInUp col-md-3">
                <div class="row">
                    <div class="col-md-4">
                        <i data-wow-duration="1.3s" data-wow-delay="1.3s" class="homeicons wow fadeInUp icon_set_1_icon-100"></i>
                    </div>
                    <div class="col-md-8 row">
                        <h4><?php echo trans('0381');?></h4>
                    </div>
                </div>
            </div>
            <div data-wow-duration="0.9s" data-wow-delay="0.9s" class="wow fadeInUp col-md-3">
                <div class="row">
                    <div class="col-md-4">
                        <i data-wow-duration="1.4s" data-wow-delay="1.4s" class="homeicons wow fadeInUp icon_set_1_icon-35"></i>
                    </div>
                    <div class="col-md-8 row">
                        <h4><?php echo trans('0383');?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgwhite">
    <div class="container">
        <div class="form-group"></div>
        <br>
        <div class="">
            <!-- Standard Hotels Module -->
            <?php if(pt_main_module_available('hotels')){ ?>
            <div class="col-md-12 row5">
                <div class="form-group">
                    <h2 class="main-title go-right"><?php echo trans('056');?></h2>
                    <div class="clearfix"></div>
                    <i class="tiltle-line go-right"></i>
                </div>
            </div>
            <?php foreach($featuredHotels as $item){ ?>
            <div class="col-md-3 row5">
                <a href="<?php echo $item->slug;?>">
                    <div class="featured">
                        <div class="col-xs-12 go-right wow fadeIn">
                            <div class="row">
                                <div class="load">
                                    <img class="img-responsive lazy" <?php echo $lazy; ?> data-lazy="<?php echo $item->thumbnail;?>" />
                                    <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: 3">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php if($item->price > 0){ ?>
                        <div class="text-center featured-price">
                            <div class="text-center">
                                <small><?php echo $item->currCode;?></small> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 go-right wow fadeIn featured-title">
                            <div class="p5">
                                <div class="strong"><?php echo character_limiter($item->title,25);?></div>
                                <?php echo $item->stars;?>
                                <div class=""><i class="icon-location-6 go-right"></i> <?php echo character_limiter($item->location,20);?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <div class="col-md-12">
                <hr>
            </div>
            <?php } ?>
            <!-- Standard Hotels Module -->
            <!-- Expedia Hotels -->
            <?php if(pt_main_module_available('ean')){ ?>
            <div class="col-md-12 row5">
                <div class="form-group">
                    <h2 class="main-title go-right"><?php echo trans('056');?></h2>
                    <div class="clearfix"></div>
                    <i class="tiltle-line go-right"></i>
                </div>
            </div>
            <?php foreach($featuredHotelsEan->hotels as $item){ ?>
            <div class="col-md-3 row5">
                <a href="<?php echo $item->slug;?>">
                    <div class="featured">
                        <div class="col-xs-12 go-right wow fadeIn">
                            <div class="row">
                                <div class="load">
                                    <img class="img-responsive lazy" <?php echo $lazy; ?> data-lazy="<?php echo $item->thumbnail;?>" />
                                    <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: 3">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php if($item->price > 0){ ?>
                        <div class="text-center featured-price">
                            <div class="text-center">
                                <small><?php echo $item->currCode;?></small> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 go-right wow fadeIn featured-title">
                            <div class="p5">
                                <div class="strong"><?php echo character_limiter($item->title,25);?></div>
                                <?php echo $item->stars;?>
                                <div class=""><i class="icon-location-6 go-right"></i> <?php echo character_limiter($item->location,20);?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <div class="col-md-12">
                <hr>
            </div>
            <?php } ?>
            <!-- Expedia Hotels -->
            <!-- Standard Tours Module -->
            <?php if(pt_main_module_available('tours')){ ?>
            <div class="col-md-12 row5">
                <div class="form-group">
                    <h2 class="main-title go-right"><?php echo trans('0451');?></h2>
                    <div class="clearfix"></div>
                    <i class="tiltle-line go-right"></i>
                </div>
            </div>
            <?php foreach($featuredTours as $item){ ?>
            <div class="col-md-3 row5">
                <a href="<?php echo $item->slug;?>">
                    <div class="featured">
                        <div class="col-xs-12 go-right wow fadeIn">
                            <div class="row">
                                <div class="load">
                                    <img class="img-responsive lazy" <?php echo $lazy; ?> data-lazy="<?php echo $item->thumbnail;?>" />
                                    <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: 3">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php if($item->price > 0){ ?>
                        <div class="text-center featured-price">
                            <div class="text-center">
                                <small><?php echo $item->currCode;?></small> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 go-right wow fadeIn featured-title">
                            <div class="p5">
                                <div class="strong"><?php echo character_limiter($item->title,25);?></div>
                                <?php echo $item->stars;?>
                                <div class=""><i class="icon-location-6 go-right"></i> <?php echo character_limiter($item->location,20);?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <div class="col-md-12">
                <hr>
            </div>
            <?php } ?>
            <!-- Standard Tours Module -->
            <!-- Standard Cars Module -->
            <?php if(pt_main_module_available('cars')){ ?>
            <div class="col-md-12 row5">
                <div class="form-group">
                    <h2 class="main-title go-right"><?php echo trans('0490');?></h2>
                    <div class="clearfix"></div>
                    <i class="tiltle-line go-right"></i>
                </div>
            </div>
            <?php foreach($featuredCars as $item){ ?>
            <div class="col-md-3 row5">
                <a href="<?php echo $item->slug;?>">
                    <div class="featured">
                        <div class="col-xs-12 go-right wow fadeIn">
                            <div class="row">
                                <div class="load">
                                    <img class="img-responsive lazy" <?php echo $lazy; ?> data-lazy="<?php echo $item->thumbnail;?>" />
                                    <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: 3">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php if($item->price > 0){ ?>
                        <div class="text-center featured-price">
                            <div class="text-center">
                                <small><?php echo $item->currCode;?></small> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 go-right wow fadeIn featured-title">
                            <div class="p5">
                                <div class="strong"><?php echo character_limiter($item->title,25);?></div>
                                <?php echo $item->stars;?>
                                <div class=""><i class="icon-location-6 go-right"></i> <?php echo character_limiter($item->location,20);?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php } ?>
            <!-- Standard Cars Module -->
        </div>
    </div>
</div>
<!--<div class="bgwhite">
    <div class="container wow fadeIn overflow-hidden pd42 row5">
            <div class="col-md-6 go-right">
                    <div class="row">
                            <div class="bg-primary block-pad">
                                    <div class="icon">
                                            <i class="icon_set_2_icon-105"></i>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="content">
                                            <h3 class="uppercase"><?php echo trans('0528'); ?></h3>
                                            <br><br>
                                            <p style="color: white"><?php echo trans('0529'); ?></p>
                                            <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs12"><a class="btn-block btn btn-primary btn-outline" href="<?php echo base_url(); ?>register"><?php echo trans('0115'); ?></a></div>
                                                    <div class="col-md-6 col-sm-6 col-xs12"><a class="btn-block btn btn-primary btn-outline" href="<?php echo base_url(); ?>login"><?php echo trans('04'); ?></a></div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-md-6 go-right">
                    <div class="row">
                            <div class="bg-warning block-pad">
                                    <div class="icon">
                                            <i class="icon_set_1_icon-41"></i>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="content">
                                            <h3 class="uppercase"><?php echo trans('0243'); ?></h3>
                                            <br><br>
                                            <p style="color: white"><?php echo trans('0504'); ?></p>
                                            <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs12"><a class="btn-block btn btn-danger btn-outline" href="<?php echo base_url(); ?>supplier-register"><?php echo trans('0241'); ?></a></div>
                                                    <div class="col-md-6 col-sm-6 col-xs12"><a class="btn-block btn btn-danger btn-outline" href="<?php echo base_url(); ?>supplier"><?php echo trans('04'); ?></a></div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
    </div>
    </div>-->
<?php if(pt_main_module_available('blog')){ if($showOnHomePage != "No"){ ?>
<div class="wow fadeIn bgwhite">
    <div class="container">
        <hr>
        <div class="col-md-12 row5">
            <div class="form-group">
                <h2 class="main-title go-right"><?php echo trans('0402');?></h2>
                <div class="clearfix"></div>
                <i class="tiltle-line go-right"></i>
            </div>
        </div>
        <div class="row">
            <div class="clearfix"></div>
            <?php foreach($posts as $p){ ?>
            <div class="col-md-4">
                <a href="<?php echo $p->slug;?>" target="_blank">
                    <div class="blog_bx">
                        <div class="img-container">
                            <img class="lazy img-responsive" <?php echo $lazy; ?> data-lazy="<?php echo $p->thumbnail;?>" />
                        </div>
                        <h5><strong><?php echo character_limiter($p->title,30);?></strong></h5>
                        <i class="tiltle-line"></i>
                        <p><?php echo $p->shortDesc;?></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } } ?>
<!-- Standard Offer Module -->
<div class="offersbg">
    <div class="container">
        <?php if($offersCount > 0){ ?>
        <div class="col-md-12 row5">
            <div class="form-group">
                <h2 class="main-title go-right"><?php echo trans('0341');?> <?php echo trans('Offers');?></h2>
                <div class="clearfix"></div>
                <i class="tiltle-line go-right"></i>
            </div>
        </div>
        <?php foreach($specialoffers as $offer){ ?>
        <div class="col-md-3 row5">
            <a href="<?php echo $offer->slug;?>">
                <div class="featured">
                    <div class="col-xs-12 go-right wow fadeIn">
                        <div class="row">
                            <div class="load">
                                <img class="img-responsive lazy" <?php echo $lazy; ?> data-lazy="<?php echo $offer->thumbnail;?>" />
                                <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: 3">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php if($offer->price > 0){ ?>
                    <div class="text-center featured-price">
                        <div class="text-center">
                            <small><?php echo $offer->currCode;?></small> <?php echo $offer->currSymbol; ?><?php echo $offer->price;?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-xs-12 go-right wow fadeIn featured-title">
                        <div class="p5">
                            <h4 class="strong"><?php echo character_limiter($offer->title,25);?></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
        <?php } ?>
        <!-- Standard Offer Module -->
    </div>
</div>