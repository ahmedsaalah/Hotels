<style>body{background-color:white}</style>
<div class="container" style="margin-top:-15px">
    <div id="Carousel" class="carousel slide carousel-fade hidden-xs hidden-sm">
        <div class="carousel-inner fadeIn animated">
            <?php  if($sliderInfo->totalSlides > 0){ foreach($sliderInfo->slides as $ms){ ?>
            <div class="item <?php echo $ms->sactive; ?> hero">
                <div class="slide">
                    <img src="<?php echo $ms->thumbnail;?>"/>
                </div>
                <div class="clearfix"></div>
                <div class="container hidden-xs hidden-sm">
                    <div class="carousel-caption text-left">
                        <h5 data-wow-duration="1s" data-wow-delay="0.1s" style="color: white; font-weight: bold; font-size: 4.5vw; border-top: .3vw solid white; border-bottom: .3vw solid white; padding: 5px 0; display: inline-block;float: left;font-size:32px;font-family: "OpenSansLight", sans-serif;" class="fadeInUp wow text-left"><?php echo $ms->title;?></h5>
                        <div class="clearfix"></div>
                        <p data-wow-duration="2s" data-wow-delay="0.1s" style="font-size:20px;font-family: "OpenSansLight", sans-serif;" class="flash wow text-left"><?php echo $ms->desc;?></p>
                        <div class="clearfix"></div>
                        <!--<h5 data-wow-duration="1s" data-wow-delay="0.2s" style="font-size:14px;color:yellow;margin-top:10px" class="slim uppercase fadeInDown wow" style="font-size:26px;color:yellow;margin-top:10px; font-weight: bold">
                            <?php echo $ms->optionalText;?></h5>
                        <div class="clearfix"></div>-->
                    </div>
                </div>
            </div>
            <?php } }else{ ?>
            <div class="item active hero">
                <div class="slide">
                    <img  src="<?php echo $theme_url; ?>assets/img/slider.jpg">
                </div>
            </div>
            <?php } ?>
        </div>
        <?php if($sliderInfo->totalSlides > 1){ ?>
        <a class="left carousel-control visible-lg visible-md" href="#Carousel" data-slide="prev">
        <span class="glyphicon-chevron-left fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control visible-lg visible-md" href="#Carousel" data-slide="next">
        <span class="glyphicon-chevron-right fa fa-angle-right"></span>
        </a>
        <?php } ?>
    </div>
</div>
<div data-wow-duration="1s" data-wow-delay="0.1s" class="wow fadeIn searchbg">
    <div class="RTL_Bar searcharea">
        <div class="container">
            <ul class="nav nav-tabs RTL tab_styling">
                <?php  if(pt_main_module_available('hotels')){ ?>
                <li role="presentation" class="active" data-title="HOTELS">
                    <a class="text-center" href="#HOTELS" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-6"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Hotels');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('ean')){ ?>
                <li role="presentation" class="text-center" data-title="EXPEDIA">
                    <a href="#EXPEDIA" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-6"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Ean');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('hotelscombined')){ ?>
                <li role="presentation" class="text-center" data-title="HOTELSC">
                    <a href="#HOTELSC" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-6"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Hotelscombined');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('Travelpayouts')){ ?>
                <li class="text-center">
                    <a href="#TRAVELPAYOUTS" data-toggle="tab" aria-controls="home">
                        <i class="searchicons icon_set_1_icon-28"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Travelpayouts');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('Travelstart')){ ?>
                <li class="text-center">
                    <a href="<?php echo base_url(); ?>flightst">
                        <i class="searchicons icon_set_1_icon-28"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Travelstart');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('flightsdohop')){ ?>
                <li role="presentation" class="text-center"  data-title="DOHOP">
                    <a href="#DOHOP" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-28"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Flightsdohop');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('wegoflights')){ ?>
                <li role="presentation" class="text-center"  data-title="WEGOFLIGHTS">
                    <a href="#WEGOFLIGHTS" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-28"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Wegoflights');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('tours')){ ?>
                <li role="presentation" class="text-center" data-title="TOURS">
                    <a href="#TOURS" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-30"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Tours');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('cars')){ ?>
                <li role="presentation" class="text-center" data-title="CARS">
                    <a href="#CARS" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="searchicons icon_set_1_icon-21"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Cars');?>
                    </a>
                </li>
                <?php } ?>
                <?php  if(pt_main_module_available('cartrawler')){ ?>
                <li role="presentation" class="text-center" data-title="CARTRAWLER">
                    <a href="#CARTRAWLER" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <i class="icon_set_1_icon-21"></i>
                        <div class="visible-xs clearfix"></div>
                        <?php echo trans('Cars');?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container formSection">
        <div class="searchground">
            <div class="tab-content">
                <?php  if(pt_main_module_available('hotels')){ ?>
                <!-- Hotels  -->
                <div role="tabpanel" class="tab-pane fade active in <?php pt_searchbox('hotels'); ?>" id="HOTELS" aria-labelledby="home-tab">
                    <?php echo searchForm('hotels'); ?>
                </div>
                <!-- Hotels  -->
                <?php } ?>
                <?php  if(pt_main_module_available('ean')){ ?>
                <!-- Expedia Hotels  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('ean'); ?>" id="EXPEDIA" aria-labelledby="home-tab">
                    <?php echo searchForm('ean'); ?>
                </div>
                <!-- Expedia Hotels  -->
                <?php } ?>
                <?php  if(pt_main_module_available('hotelscombined')){ ?>
                <!-- HotelsCombine -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('hotelscombined'); ?>" id="HOTELSC" aria-labelledby="home-tab">
                    <div style="margin-top:7px">
                        <script src="//www.hotelscombined.com/SearchBox/<?php echo $searchBoxID;?>"></script>
                    </div>
                </div>
                <!-- HotelsCombine   -->
                <?php } ?>
                <?php  if(pt_main_module_available('Travelpayouts')){ ?>
                <!-- Travelpayouts Flights  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('Travelpayouts'); ?>" id="TRAVELPAYOUTS" aria-labelledby="home-tab">
                    <script charset="utf-8" src="<?php echo $WidgetURL; ?>" async></script>
                </div>
                <!-- Travelpayouts Flights  -->
                <?php } ?>
                <?php  if(pt_main_module_available('flightsdohop')){ ?>
                <!-- Dohop Flights  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('Flightsdohop'); ?>" id="DOHOP" aria-labelledby="home-tab">
                    <?php echo searchForm('flightsdohop'); ?>
                </div>
                <!-- Dohop Flights  -->
                <?php } ?>
                <?php  if(pt_main_module_available('wegoflights')){ ?>
                <!-- Wego Flights  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('Wegoflights'); ?>" id="WEGOFLIGHTS" aria-labelledby="home-tab">
                    <?php require $themeurl.'views/integrations/flights/wegoflights/search.php';?>
                </div>
                <!-- Wego  Flights  -->
                <?php } ?>
                <?php  if(pt_main_module_available('tours')){ ?>
                <!-- Tours  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('tours'); ?>" id="TOURS" aria-labelledby="home-tab">
                    <?php echo searchForm('tours'); ?>
                </div>
                <!-- Tours  -->
                <?php } ?>
                <?php  if(pt_main_module_available('cars')){ ?>
                <!-- Cars  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('cars'); ?>" id="CARS" aria-labelledby="home-tab">
                    <?php echo searchForm('cars'); ?>
                </div>
                <!-- Cars  -->
                <?php } ?>
                <?php  if(pt_main_module_available('cartrawler')){ ?>
                <!-- Cartrawler  -->
                <div  role="tabpanel" class="tab-pane fade <?php pt_searchbox('cartrawler'); ?>" id="CARTRAWLER" aria-labelledby="home-tab">
                    <?php echo searchForm('cartrawler'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="overlays"></div>
