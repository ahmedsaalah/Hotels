<?php	if($mSettings->mobileSectionStatus == "Yes"){  ?>
<div class="mob-bg">
    <div class="container">
        <div class="col-sm-8 col-md-8 mt35 go-right wow fadeIn">
            <h3 class="go-text-right"><?php echo trans('0386'); ?></h3>
            <p class="go-text-right"><?php echo trans('0387'); ?></p>
            <div class="row">
                <?php if(!empty($mSettings->iosUrl)){ ?>
                <div class="col-sm-4 col-md-4 col-xs-6 go-right wow"><a href="<?php echo $mSettings->iosUrl; ?>" target="_blank"><img src="<?php echo $theme_url; ?>assets/img/ios.png" class="img-responsive" alt="ios" /></a></div>
                <?php } ?>
                <?php if(!empty($mSettings->androidUrl)){ ?>
                <div class="col-sm-4 col-md-4 col-xs-6 go-right wow"><a href="<?php echo $mSettings->androidUrl; ?>" target="_blank"><img src="<?php echo $theme_url; ?>assets/img/android.png" class="img-responsive" alt="android" /></a></div>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 go-left wow fadeIn">
            <img src="<?php echo $theme_url; ?>assets/img/apps.png" class="img-responsive pull-right go-left" alt="apps" />
        </div>
    </div>
</div>
<?php } ?>
<nav class="foot-nav newsletter hidden-xs hidden-sm navbar navbar-inverse navbar-static<?php echo @$hidden; ?>" style="margin-bottom:0px;">
    <div class="container">
        <div class="collapse navbar-collapse">
            <?php if(pt_is_module_enabled('newsletter')){ ?>
            <ul class="nav navbar-nav <!--go-right-->">
                <li><a class="newstext" href="javascript:void(0);"><?php echo trans('023');?></a></li>
            </ul>
            <div id="message-newsletter_2"></div>
            <form role="search" onsubmit="return false;">
            </form>
            <div class="col-md-5 relative">
                <input type="email" class="form-control fccustom2 sub_email" id="exampleInputEmail1" placeholder="<?php echo trans('0403');?>" required>
                <button type="submit" class="btn btn-default btncustom sub_newsletter">&nbsp;</button>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a class="newstext" href="javascript:void(0);">
                        <div class="subscriberesponse"></div>
                    </a>
                </li>
            </ul>
            <?php } ?>
            <div style="margin-top:8px;" class="navbar-form navbar-right <!--go-left-->">
                <?php foreach($footersocials as $fs){ ?>
                <a href="<?php echo $fs->social_link;?>" target="_blank"><img src="<?php echo PT_SOCIAL_IMAGES; ?><?php echo $fs->social_icon;?>" class="social-icons-footer" /></a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
<footer id="footer" class="<?php echo @$hidden; ?>">
    <div class="container form-group">
        <div class="col-md-3 grey go-right col-xs-12">
            <div class="clearfix"></div>
            <a href="<?php echo base_url(); ?>"><img src="<?php echo PT_GLOBAL_IMAGES_FOLDER.$app_settings[0]->header_logo_img;?>" class="foot-brand center-block img-responsive"/></a>
            <?php if($allowsupplierreg){ ?>
            <div class="col-md-12">
                <div class="row">
                    <!-- <form action="<?php echo base_url(); ?>supplier-register" type="GET">
                        <button type="submit" class="btn btn-default btn-block"> <?php echo trans('0241');?></button>
                        </form>-->
                </div>
            </div>
            <?php } ?>
        </div>
        <?php get_footer_menu_items(22,"wow fadeIn col-sm-4 col-xs-12 col-md-3 go-right","go-text-right","footerlist go-right go-text-right" );?>
        <?php get_footer_menu_items(3, "wow fadeIn col-sm-4 col-xs-12 col-md-3 go-right","go-text-right","footerlist go-right go-text-right"  );?>
        <?php get_footer_menu_items(19,"wow fadeIn col-sm-4 col-xs-12 col-md-3 go-right","go-text-right","footerlist go-right go-text-right" );?>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <div class="clearfix"></div>
        <div class="footer-splitter">
            <h3>Book with confidence</h3>
        </div>
        <div class="container panel-body">
            <div class="col-md-7">
                <img src="<?php echo $theme_url; ?>assets/img/footer-icons.png" class="img-responsive" alt="" />
            </div>
            <div class="col-md-3 text-center">
                <div class="row">
                    <br>
                    Powered and Build by PHPTRAVELS
                </div>
            </div>
            <div class="col-md-2">
                <a href="http://phptravels.com" target="_blank"><img src="<?php echo $theme_url; ?>assets/img/footer-php.png" class="img-responsive" alt="PHPTRAVELS" /></a>
            </div>
        </div>
        <div class="footer-splitter form-group">
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <div class="text-center">
                <p class="text-center">&copy; <?php echo $app_settings[0]->copyright;?></p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- tripadvisors block -->
    <?php if($tripmodule){ ?>
    <div class="footerbg text-center hidden-xs">
        <a class="btn-block" target="_blank" href="//www.tripadvisor.com/pages/terms.html"><img width="200" lass="block-center" src="<?php echo PT_GLOBAL_IMAGES_FOLDER . 'tripadvisor.png';?>" alt="TripAdvisor" /></a>
        <p>Ratings and Reviews Powered by TripAdvisor</p>
    </div>
    <?php } ?>
    <!-- tripadvisors block -->
    <div class="text-center hidden-xs">
        <div class="col-md-12">
            <div class="row"><a class="btn btn-primary" target="_blank" href="<?php echo base_url(); ?>supplier/"><?php echo trans('0527');?></a></div>
        </div>
    </div>
</footer>
<div class="footerbg hidden-xs">
    <div class="container text-center">
        <a href="javascript:void" class="gotop scroll wow fadeInUp btn btn-default"><i class="icon-up-open-big"></i></a>
    </div>
</div>
<?php include 'scripts.php'; ?>
<?php echo $app_settings[0]->google; ?>
<script>
    $(document).ready(function(){
            // Safari 3.0+ "[object HTMLElementConstructor]"
            var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0 || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);

            if(isSafari == true){
                /*$("i").next(".selectx:not(#currency)").css("text-indent", "30px !important").css("line-height", "40px !important");
                    var img_icon_1 = "<img src='<?php echo $theme_url; ?>assets/img/child-adult.png' class='new_icon'>";
                    console.log(img_icon_1);*/
                    /*$(".icon_set_2_icon-105").addClass("safari-icon").removeClass("icon_set_2_icon-105");*/
                $(".bg-warning").css("padding-bottom", "82px !important");
            }
            });
</script>
</body>
</html>
