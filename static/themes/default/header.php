<!DOCTYPE html>
<html ng-app="phptravelsApp">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo @$metadescription; ?>">
<meta name="keywords" content="<?php echo @$metakeywords; ?>">
<meta name="author" content="PHPTRAVELS">
<title><?php echo @$pageTitle; ?></title>
<link rel="shortcut icon" href="<?php echo PT_GLOBAL_IMAGES_FOLDER.'favicon.png';?>">
<link href="<?php echo $theme_url; ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo $theme_url; ?>style.css" rel="stylesheet">

<!-- facebook --> <meta property="og:title" content="<?php echo @$pageTitle; ?>"/> <meta property="og:site_name" content="<?php echo $app_settings[0]->site_title;?>"/> <meta property="og:description" content="<?php if($app_settings[0]->seo_status == "1"){echo $metadescription;}?>"/> <meta property="og:image" content="<?php echo base_url(); ?>uploads/global/favicon.png"/>  <meta property="og:url" content="<?php echo $app_settings[0]->site_url;?>/"/> <meta property="og:publisher" content="https://www.facebook.com/<?php echo $app_settings[0]->site_title;?>"/> <script type="application/ld+json">{"@context":"http://schema.org/","@type":"Organization","name":"<?php echo $app_settings[0]->site_title;?>","url":"<?php echo $app_settings[0]->site_url;?>/","logo":"<?php echo base_url(); ?>uploads/global/favicon.png","sameAs":"https://www.facebook.com/<?php echo $app_settings[0]->site_title;?>","sameAs":"https://twitter.com/<?php echo $app_settings[0]->site_title;?>","sameAs":"https://www.pinterest.com/<?php echo $app_settings[0]->site_title;?>/","sameAs":"https://plus.google.com/u/0/<?php echo $app_settings[0]->site_title;?>/posts","contactPoint":{"@type":"ContactPoint","telephone":"<?php echo $phone; ?>","contactType":"Customer Service"}}{"@context":"http://schema.org","@type":"WebSite","name":"<?php echo $app_settings[0]->site_title;?>","url":"<?php echo $app_settings[0]->site_url;?>"}  </script>
<!-- Child Theme --> <style> @import "<?php echo $theme_url; ?>assets/css/childstyle.css"; </style>
<!-- Google Maps --> <?php if (pt_main_module_available('ean') || $loadMap) { ?> <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo $app_settings[0]->mapApi; ?>&libraries=places"></script> <script src="<?php echo $theme_url; ?>assets/js/infobox.js"></script><?php } ?>
<!-- jQuery --> <script src="<?php echo $theme_url; ?>assets/js/jquery-1.11.2.min.js"></script>
<!-- RTL CSS --> <?php if($isRTL == "RTL"){ ?> <link href="<?php echo $theme_url; ?>RTL.css" rel="stylesheet"> <?php } ?>
<!-- Mobile Redirect --> <?php if($mSettings->mobileRedirectStatus == "Yes"){ if($ishome != "invoice"){ ?> <script>if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){ window.location ="<?php echo $app_settings[0]->mobile_redirect_url ?>";}</script> <?php } } ?>
<!--[if lt IE 7] > <link rel="stylesheet" type="text/css" href="<?php echo $theme_url; ?>assets/css/font-awesome-ie7.css" media="screen" /> <![endif]-->
<!-- Autocomplete CSS files-->
<link href="<?php echo $theme_url; ?>assets/js/autocomplete/easy-autocomplete.min.css" rel="stylesheet" type="text/css">
<!-- Autocomplete CSS files-->
<!-- Autocomplete JS files-->
<script src="<?php echo $theme_url; ?>assets/js/autocomplete/jquery.easy-autocomplete.min.js" type="text/javascript" ></script>

<!-- Autocomplete JS files-->

</head>
<body>
<div class="clearfix"></div>
<div class="navbar navbar-static-top navbar-default <?php echo @$hidden; ?>">
  <div class="container">
    <div class="navbar">
      <!-- Navigation-->
      <div class="navbar-header go-right">
        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo PT_GLOBAL_IMAGES_FOLDER.$app_settings[0]->header_logo_img;?>" alt="<?php echo $app_settings[0]->site_title;?>" class="logo"/></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="<!--hidden-sm--> nav navbar-nav navbar-right currency_btn <!--go-left-->">
          <form class="navbar-form navbar-left width_change">
            <div class="form-group">
              <li class="dropdown <?php pt_active_link();?> go-left pull-left">
                <?php if(strpos($currenturl,'book') == false && $app_settings[0]->multi_curr == 1 && empty($hideCurr)){ $currencies = ptCurrencies(); ?>
          <form class="dropdown pull-left header-currency go-left">
          <div class="styled-select">
          <select onchange="change_currency(this.value)" class="selectx input-sm" name="currency" id="currency">
          <?php foreach($currencies as $c){ ?>
          <option value="<?php echo $c->id;?>" <?php makeSelected($currency,$c->code); ?>><?php echo $c->name;?></option>
          <?php } ?>
          </select>
          </div>
          <div class="clearfix"></div>
          </form>
          <?php } ?>
          </li>
          </div>
          </form>
          <li class="pull-left width_change">
            <?php if(empty($langname)){ $langname = languageName($lang_set); }else{ $langname = $langname; } if (strpos($currenturl,'book') !== false || !empty($hideLang)) { }else{
              if($app_settings[0]->multi_lang == '1') { $default_lang = $app_settings[0]->default_lang; if(!empty($lang_set)){ $default_lang = $lang_set; } ?>
            <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><img src="<?php echo PT_LANGUAGE_IMAGES.$default_lang.".png";?>" width="21" height="14" alt="<?php echo $langname;?>"> <?php echo $langname;?> </a>
            <ul class="dropdown-menu">
              <?php foreach($languageList as $ldir => $lname){ $selectedlang = ''; if(!empty($lang_set) && $lang_set == $ldir){ $selectedlang = 'selected'; }elseif(empty($lang_set) && $default_lang == $ldir){ $selectedlang = 'selected'; } ?>
              <li><a href="<?php echo pt_set_langurl($langurl,$ldir);?>" data-langname="<?php echo $lname['name'];?>" id="<?php echo $ldir; ?>" class="changelang" ><img src="<?php echo PT_LANGUAGE_IMAGES.$ldir.".png";?>" width="21" height="14" alt="">  <?php echo $lname['name'];?></a></li>
              <?php } ?>
            </ul>
            <?php } ?>
            <?php } ?>
          </li>
              <div class="header-brdr pull-left hidden-xs hidden-md go-left"></div>
          <?php  if(!empty($customerloggedin)){ ?>
          <li class="pull-right width_change">
            <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="icon_set_2_icon-105"></i> <?php echo $firstname; ?> <b class="lightcaret mt-2"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>account/">  <?php echo trans('02');?></a></li>
              <li><a href="<?php echo base_url()?>account/logout/">  <?php echo trans('03');?></a></li>
            </ul>
          </li>
          <?php }else{ if (strpos($currenturl,'book') !== false) { }else{ if($allowreg == "1"){ ?>
          <li class="<!--pull-right--> width_change">
            <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="icon_set_2_icon-105"></i> <?php echo trans('0146');?> <b class="lightcaret mt-2"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>login">  <?php echo trans('04');?></a></li>
              <li><a href="<?php echo base_url(); ?>register">  <?php echo trans('0115');?></a></li>
            </ul>
          </li>
          <?php } } } ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-default navbar-orange hidden-xs">
  <div class="container">
  <div class="row">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left go-right">
          <li class="dropdown <?php pt_active_link();?> go-right">
           <a class="dropdown-toggle" href="<?php echo base_url(); ?>"> <?php echo trans('01');?> </a>
          </li>
          <?php if($headerMenu->hasMenu){ foreach($headerMenu->pagesInfo as $page){ ?>
          <li class="go-right <?php echo $page->dropdown." ".$page->activeLinkClass;?>">
            <a href="<?php echo $page->hrefLink;?>" class="<?php echo $page->activeLinkClass.' '.$page->dropdowntoggle;?>" <?php echo $datatoggle;?>  target="<?php echo $page->target;?>" >
              <!--<i class='<?php  echo $page->icon;?>'></i>--> <?php echo $page->title;?>  <?php echo $page->caret;?>
            </a>
            <?php if($page->hasChild){  ?>
            <ul class="<?php echo $page->dropdownmenu;?>">
              <?php foreach($page->children as $childPage){ ?>
              <li>
                <a href="<?php  echo $childPage->hrefLink;?>" target="<?php echo $childPage->target;?>" ><i class='<?php echo $childPage->icon;?>'></i> <?php echo $childPage->title;?> </a>
              </li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } } ?>
        </ul>
    </div>
  </div>
  </div>
</nav>
