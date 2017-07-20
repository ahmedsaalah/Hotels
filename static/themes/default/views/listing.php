<style>
.summary  { border-right: solid 2px rgb(0, 93, 247); color: #ffffff; background: #4285f4; padding: 14px; float: left; font-size: 14px; }
.sideline { margin-top: 15px; margin-bottom: 15px; padding-left: 15px; display: table-cell; border-left: solid 1px #e7e7e7; }
.localarea { margin-top: 15px; margin-bottom: 15px; padding-left: 15px; }
.captext  { display: block; font-size: 14px; font-weight: 400; color: #23527c; line-height: 1.2em; text-transform: capitalize; }
.ellipsis { max-width: 250px; white-space: nowrap !important; overflow: hidden !important; text-overflow: ellipsis !important; }
.noResults { right: 30px; top: 26px; color: #008cff; font-size: 16px; }
.lab{display:none}
.xxl{width:100% !important}
.xl{width:100%}
.l{width:50%}
 label { font-size: 12px; margin-left: 5px; }
</style>

<div class="container">
<?php if($appModule != "offers"){ ?>
<div class="row listing-search">

<div class="col-md-1 col-sm-2 col-xs-4 summary go-right">
 <small><?php echo trans('0379');?></small>
 <?php echo trans('039');?>
 </div>

  <?php if($appModule == "cars"){ ?>
  <!-- Cars Summary Text -->
  <div class="col-md-3 col-sm-10 col-xs-8 localarea go-right">
 <small class=" go-right"><?php echo trans('0210');?></small><div class="clearfix"></div>
 <span class="captext ellipsis go-right"><?php if(!empty($pickupLocationName)){ echo $pickupLocationName; }else{ ?> <span data-toggle="modal" data-target="#modify" style="cursor: pointer"> <?php echo trans('0447'); ?> </span> <?php } ?></span>
 </div>

 <div class="col-md-3 col-sm-10 col-xs-8 sideline localarea go-right">
 <small class=" go-right"><?php echo trans('0211');?></small><div class="clearfix"></div>
 <span class="captext ellipsis go-right"><?php if(!empty($dropoffLocationName)){ echo $dropoffLocationName; }else{ ?> <span data-toggle="modal" data-target="#modify" style="cursor: pointer">  <?php echo trans('0447'); ?> </span> <?php } ?></span>
 </div>

 <div class="visible-sm"><div class="clearfix"></div></div>
 <div class="visible-xs"><div class="clearfix"></div></div>

 <div class="col-md-2 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('0210');?> <?php echo trans('08');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo @$checkin; ?></span>
 </div>

 <div class="col-md-2 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('0211');?> <?php echo trans('08');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo @$checkout; ?></span>
 </div>
  <!-- End Cars Summary Text -->
  <?php }else{ ?>
 <div class="col-md-<?php if($appModule == "tours"){ echo '6'; }else{ echo '3'; }?> col-sm-10 col-xs-8 localarea go-right">
 <small class=" go-right"><?php echo trans('0254');?></small><div class="clearfix"></div>
 <span class="captext ellipsis go-right"><?php if(!empty($searchText)){ echo @$searchText; }else{ ?><span data-toggle="modal" data-target="#modify" style="cursor: pointer">  <?php echo trans('0447'); ?> </span><?php } ?></span>
 </div>

 <div class="visible-sm"><div class="clearfix"></div></div>
 <div class="visible-xs"><div class="clearfix"></div></div>

 <div class="col-md-2 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('07');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo @$checkin; ?></span>
 </div>
  <?php if(!empty($checkout)){ ?>
 <div class="col-md-2 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('09');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo @$checkout; ?></span>
 </div>
 <?php } ?>

  <?php if(!empty($totalStay)){ ?>
 <div class="col-md-2 col-sm-2 col-xs-4 sideline hidden-md go-right">
 <small class="go-right"><?php echo trans('060');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo $totalStay; ?> <?php echo trans('0122'); ?></span>
 </div>
 <?php } ?>

 <div class="visible-xs"><div class="clearfix"></div></div>

 <div class="col-md-1 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('010');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo $adults;?></span>
 </div>

 <div class="col-md-1 col-sm-2 col-xs-4 sideline go-right">
 <small class="go-right"><?php echo trans('011');?></small><div class="clearfix"></div>
 <span class="captext go-right"><?php echo (int)$child; ?></span>
 </div>

 <?php } ?>

 <div class="clearfix"></div>
 </div>

<?php } ?>
 </div>

<!-- CONTENT -->
<div style="margin-top:15px" class="collapse" id="collapseMap">
<div id="map" class="map"></div>
<br>
</div>
<div class="container pagecontainer offset-0">
<div class="clearfix"></div>
<?php if($appModule == "offers"){ ?>
  <!-- Widgets for offers list page -->
     <div class="clearfix"></div>
    <div class="col-md-3 go-right">
    <?php echo run_widget(63); ?>
     </div>
  <!-- End Widgets for offers list page -->

 <?php }else{ if($appModule == "ean"){ ?>
<!-- Start Ean search form left side -->

  <!-- FILTERS -->
  <div class="col-md-3 filters offset-0 go-right rtl_width">
    <a class="btn btn-block btn-default" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><?php echo trans('067');?></a>
    <!-- TOP TIP -->

    <div class="searchbox">
    <div class="textline">
     <span class="searchtext"><span><i class="icon_set_1_icon-42"></i> <?php echo trans('0284'); ?></span></span>
    </div>
    <?php echo searchForm($appModule); ?>
    <div class="clearfix"></div>
    </div>
<form  action="<?php echo $baseUrl;?>search" method="GET">
      <div class="tip-arrow"></div>
    <!-- Star ratings -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse1">
    <?php echo trans('0137');?> <?php echo trans('069');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse1" class="collapse in">
      <div class="hpadding20">
        <br>
        <?php $star = '<i class="star text-warning fa fa-star voted"></i>'; ?>
        <?php $stars = '<i class="fa fa-star-o"></i>'; ?>
        <div  class="rating" style="font-size: 14px;">
          <div class="go-right"><input id="1" type="radio" name="stars" class="go-right radio" value="1" <?php if(@$_GET['stars'] == "1"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="1"><?php echo $star; ?><?php for($i=1;$i<=6;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="2" type="radio" name="stars" class="radio go-right" value="2" <?php if(@$_GET['stars'] == "2"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="2"><?php for($i=1;$i<=2;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=5;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="3" type="radio" name="stars" class="radio" value="3" <?php if(@$_GET['stars'] == "3"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="3"><?php for($i=1;$i<=3;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=4;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="4" type="radio" name="stars" class="radio" value="4" <?php if(@$_GET['stars'] == "4"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="4"><?php for($i=1;$i<=4;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=3;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="5" type="radio" name="stars" class="radio" value="5" <?php if(@$_GET['stars'] == "5"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="5"><?php for($i=1;$i<=5;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=2;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
         <!-- <div class="go-right"><input id="7" type="radio" name="stars" class="radio" value="7" <?php if(@$_GET['stars'] == "7"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="7"><?php for($i=1;$i<=7;$i++){ ?> <?php echo $star; ?> <?php } ?></label></div>-->
        </div>
      </div>
      <div class="clearfix"></div>
      <br>
    </div>
    <!-- End of Star ratings -->
    <!-- Price range -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse2">
    <?php echo trans('0301');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse2" class="collapse in">

     <div class="panel-body text-center">
                <?php if(!empty($_GET['price'])){
                  $selectedprice = $_GET['price'];
                  }else{
                  $selectedprice =  $minprice.",".$maxprice;
                  }?>
         <input type="text" class="col-md-12" value="" data-slider-min="<?php echo @$minprice;?>" data-slider-max="<?php echo @$maxprice;?> " data-slider-step="100" data-slider-value="[<?php echo $selectedprice;?>]" id="sl2" name="price">
     </div>

    </div>
    <!-- End of Price range -->
    <!-- Acomodations -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse3">
    <?php echo trans('0478');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse3" class="collapse in">
      <div class="hpadding20">
        <br>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="6" id="all" class="checkbox go-right" <?php if(in_array("6", $propertyCategory)){ echo "checked"; } ?> /><label for="all" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('0467');?> &nbsp;</label></div>
        <div class="clearfix"></div>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="1" id="hotel" class="checkbox go-right" <?php if(in_array("1", $propertyCategory)){ echo "checked"; } ?> /><label for="hotel" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('01');?> &nbsp; </label></div>
        <div class="clearfix"></div>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="2" id="suite" class="checkbox go-right" <?php if(in_array("2", $propertyCategory)){ echo "checked"; } ?> /><label for="suite" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('0468');?>&nbsp;&nbsp; </label></div>
        <div class="clearfix"></div>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="3" id="resort" class="checkbox go-right" <?php if(in_array("3", $propertyCategory)){ echo "checked"; } ?> /><label for="resort" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('0469');?> &nbsp;</label></div>
        <div class="clearfix"></div>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="4" id="vacation" class="checkbox go-right" <?php if(in_array("4", $propertyCategory)){ echo "checked"; } ?> /><label for="vacation" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('0470');?> &nbsp; </label></div>
        <div class="clearfix"></div>
        <div class="go-right"><input type="checkbox" name="propertyCategory[]" value="5" id="bed" class="checkbox go-right" <?php if(in_array("5", $propertyCategory)){ echo "checked"; } ?> /><label for="bed" class="css-label go-left"> &nbsp;&nbsp;<?php echo trans('0471');?> &nbsp;</label></div>
        <div class="clearfix"></div>
        <br>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End of Acomodations -->

    <!-- Property Amenities -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse4">
    Property Amenities <span class="collapsearrow"></span>
    </button>
    <div id="collapse4" class="collapse in">
      <div class="scroll-400">
        <div class="hpadding20">
            <br>
          <?php foreach($propertyAmenities as $pa){ ?>

          <div class="go-right">    <input class="checkbox go-right" id="pa<?php echo $pa->id;?>" name="amenities[]" value="<?php echo $ra->id;?>" type="checkbox">
              <label for="pa<?php echo $pa->id;?>"><?php echo character_limiter($pa->name,20); ?>
              </label></div>
              <div class="clearfix"></div>

          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End of Property Amenities -->

    <!-- Room Amenities -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse5">
    Room Amenities <span class="collapsearrow"></span>
    </button>
    <div id="collapse5" class="collapse in">
      <div class="scroll-400">
        <div class="hpadding20">
            <br>
          <?php foreach($roomAmenities as $ra){ ?>

          <div class="go-right">    <input class="checkbox go-right" id="ra<?php echo $ra->id;?>" name="amenities[]" value="<?php echo $ra->id;?>" type="checkbox">
          <label for="ra<?php echo $ra->id;?>"><?php echo character_limiter($ra->name,20); ?>
          </label></div>
              <div class="clearfix"></div>

          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End of Room Amenities -->

    <!-- End of Hotel Preferences -->
    <div class="clearfix"></div>
    <br/>
    <input type="hidden" name="city" value="<?php if(!empty($_GET['city'])){ echo $_GET['city']; }else{ echo $selectedCity; } ?>">
    <input type="hidden" name="checkIn" value="<?php echo $checkin; ?>">
    <input type="hidden" name="checkOut" value="<?php echo $checkout; ?>">
    <input type="hidden" name="childages" value="<?php echo $childAges; ?>">
    <input type="hidden" name="adults" value="<?php echo $adults; ?>">
    <input type="hidden" name="search" value="1">
    <button style="border-radius:0px;margin-bottom: 0px;" type="submit" class="btn btn-action btn-lg btn-block" id="searchform"><?php echo trans('012');?></button>
  </div>
  <!-- END OF FILTERS -->
</form>

<!-- End Ean search form left side -->

<?php }else{ ?>




  <!-- FILTERS -->
  <div class="col-md-3 filters offset-0 go-right rtl_width">
    <a class="btn btn-block btn-default btn-lg" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><i class="icon_set_1_icon-41"></i> <?php echo trans('067');?></a>

    <div class="searchbox">
    <div class="textline">
     <span class="searchtext"><span><i class="icon_set_1_icon-42"></i> <?php echo trans('0284'); ?></span></span>
    </div>
    <?php echo searchForm($appModule); ?>
    <div class="clearfix"></div>
    </div>
    <form  action="<?php echo base_url().$appModule;?>/search" method="GET" role="search">




    <!-- TOP TIP -->
      <div style="padding:10px 10px 10px 10px">
<div class="textline">
     <span class="filterstext"><span><i class="icon_set_1_icon-95"></i><?php echo trans('0191');?></span></span>
    </div>        </div>
      <div class="clearfix"></div>
    <!-- Star ratings -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse1">
    <?php echo trans('0137');?> <?php echo trans('069');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse1" class="collapse in">
      <div class="hpadding20">
        <br>
        <?php $star = '<i class="star text-warning fa fa-star voted"></i>'; ?>
        <?php $stars = '<i class="fa fa-star-o"></i>'; ?>
        <div  class="rating" style="font-size: 14px;">
          <div class="go-right"><input id="1" type="radio" name="stars" class="go-right radio" value="1" <?php if(@$_GET['stars'] == "1"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="1"><?php echo $star; ?><?php for($i=1;$i<=6;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="2" type="radio" name="stars" class="radio go-right" value="2" <?php if(@$_GET['stars'] == "2"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="2"><?php for($i=1;$i<=2;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=5;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="3" type="radio" name="stars" class="radio" value="3" <?php if(@$_GET['stars'] == "3"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="3"><?php for($i=1;$i<=3;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=4;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="4" type="radio" name="stars" class="radio" value="4" <?php if(@$_GET['stars'] == "4"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="4"><?php for($i=1;$i<=4;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=3;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <div class="go-right"><input id="5" type="radio" name="stars" class="radio" value="5" <?php if(@$_GET['stars'] == "5"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="5"><?php for($i=1;$i<=5;$i++){ ?> <?php echo $star; ?> <?php } ?><?php for($i=1;$i<=2;$i++){ ?> <?php echo $stars; ?> <?php } ?></label></div>
          <div class="clearfix"></div>
          <!--<div class="go-right"><input id="7" type="radio" name="stars" class="radio" value="7" <?php if(@$_GET['stars'] == "7"){echo "checked";}?>>&nbsp;&nbsp;<label class="go-left" for="7"><?php for($i=1;$i<=7;$i++){ ?> <?php echo $star; ?> <?php } ?></label></div> -->
        </div>
      </div>
      <div class="clearfix"></div>
      <br>
    </div>
    <!-- End of Star ratings -->
    <!-- Price range -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse2">
    <?php echo trans('0301');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse2" class="collapse in">


     <div class="panel-body text-center">
                <?php if(!empty($_GET['price'])){
                  $selectedprice = $_GET['price'];
                  }else{
                  $selectedprice =  $minprice.",".$maxprice;
                  }?>
         <input type="text" class="col-md-12" value="" data-slider-min="<?php echo @$minprice;?>" data-slider-max="<?php echo @$maxprice;?> " data-slider-step="100" data-slider-value="[<?php echo $selectedprice;?>]" id="sl2" name="price">
     </div>

     </div>
    <!-- End of Price range -->
    <!-- Module types -->
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse3">
    <?php if($appModule == "hotels"){ echo trans('0478'); }else if($appModule == "tours"){ echo trans('0366'); }else if($appModule == "cars"){ echo trans('0214'); } ?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse3" class="collapse in">
      <div class="hpadding20">
        <br>
        <div class="clearfix"></div>
        <?php @$vartype = $_GET['type'];
          if(empty($vartype)){
          $vartype = array();
          }
          foreach($moduleTypes as $mtype){
            if(!empty($mtype->name)){
              if($appModule == "hotels"){
          ?>
        <div class="go-right"> <input type="checkbox" value="<?php echo $mtype->id;?>" <?php if(in_array($mtype->id,$vartype)){echo "checked";}?> name="type[]" id="<?php echo $mtype->name;?>" class="checkbox" /> <label for="<?php echo $mtype->name;?>" class="css-label go-left">&nbsp;&nbsp;<?php echo $mtype->name;?></label></div>
        <div class="clearfix"></div>
        <?php }else if($appModule == "tours" || $appModule == "cars"){ ?>
        <div class="go-right"><input class="radio" type="radio" value="<?php echo $mtype->id;?>" name="type" id="<?php echo $mtype->name;?>" class="checkbox go-right" <?php if($mtype->id == $vartype){echo "checked";}?> /><label for="<?php echo $mtype->name;?>" class="css-label go-left"> &nbsp;&nbsp; <?php echo $mtype->name;?> &nbsp;&nbsp;</label></div>
        <div class="clearfix"></div>
        <?php } } } ?>
        <br>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End of Module Types -->
    <!-- Hotel Amenities -->
    <?php if(!empty($amenities)){ ?>
    <button type="button" class="collapsebtn last go-text-right" data-toggle="collapse" data-target="#collapse4">
    <?php echo trans('0249');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse4" class="collapse in">
      <div class="hpadding20">
        <br>
        <div class="clearfix"></div>
        <?php @$varAmt = $_GET['amenities'];
          if(empty($varAmt)){
          $varAmt = array();
          }
          foreach($amenities as $hamt){
          ?>
        <div class="go-right"><input type="checkbox" value="<?php echo $hamt->id;?>" <?php if(in_array($hamt->id,$varAmt)){echo "checked";}?> name="amenities[]" id="<?php echo $hamt->name;?>" class="checkbox" /><label for="<?php echo $hamt->name;?>" class="css-label go-left"> <img class="go-right" style="height: 22px;margin-right:5px;margin-left:5px" src="<?php echo $hamt->icon;?>">  <?php echo $hamt->name;?></label></div>
        <div class="clearfix"></div>
        <?php } ?>
      </div>
      <div class="clearfix"></div>
    </div>
    <?php } ?>
    <?php if($appModule == "cars"){ ?>
    <button type="button" class="collapsebtn go-text-right" data-toggle="collapse" data-target="#collapse5">
    <?php echo trans('0207');?> <span class="collapsearrow"></span>
    </button>
    <div id="collapse5" class="collapse in">
      <div class="hpadding20">
        <br>
        <div class="clearfix"></div>
        <select class="selectx" name="pickup">
          <option value=""> <?php echo trans('0158');?></option>
          <option value="yes" <?php echo makeSelected($selectedPickup, "yes"); ?>  ><?php echo trans('0363');?></option>
          <option value="no" <?php echo makeSelected($selectedPickup, "no"); ?> ><?php echo trans('0364');?></option>
        </select>
      </div>
    </div>
    <?php } ?>
    <!-- End of Hotel Amenities -->
    <div class="clearfix"></div>
    <br/>
   <input type="hidden" name="txtSearch" value="<?php echo @$_GET['txtSearch']; ?>">
  <input type="hidden" name="searching" value="<?php echo @$_GET['searching']; ?>"> <input type="hidden" name="modType" value="<?php echo @$_GET['modType']; ?>">
    <button style="border-radius:0px;margin-bottom:0px;" type="submit" class="btn btn-action btn-lg btn-block" id="searchform"><?php echo trans('012');?></button>
  </form>
 </div>
  <!-- END OF FILTERS -->


<?php } } ?>

<!-- <div class="visible-xs"><br><br></div>-->
<!-- LIST CONTENT-->
<!--<div class="clearfix"></div> -->
<div class="rightcontent col-md-9 pl15pr0">
<div class="itemscontainer">
  <?php if(!empty($module)){ ?>
 <table class="bgwhite table table-striped">

  <?php foreach($module as $item){ ?>


<tr>
 <td>
    <div class="offset-3 offset-RTL">
      <div class="wow fadeIn col-lg-4 col-md-4 col-sm-4 offset-0 go-right rtl_pic">
        <!-- Add to whishlist -->
        <?php if($appModule != "ean" && $appModule != "offers"){ ?>
        <span  ><?php echo wishListInfo($appModule, $item->id); ?></span>
        <?php } ?>
        <!-- Add to whishlist -->
        <div class="img_list">
          <a href="<?php echo $item->slug;?>">
            <img <?php echo lazy(); ?> class="" data-lazy="<?php echo $item->thumbnail;?>" alt="<?php echo character_limiter($item->title,20);?>">
            <div class="short_info"></div>
          </a>
        </div>
      </div>
      <div class="wow fadeIn col-md-8 col-sm-8 offset-0">
        <div class="itemlabel3">
          <div class="labelright go-left" style="min-width:105px;margin-left:5px;padding-left:14px;">
            <?php  if($item->price > 0){ ?>
            <div class="text-success fs18 text-center">
            <b>
            <small><?php echo $item->currCode;?></small> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
            </b></div>
            <div class="clearfix"></div>
            <?php } ?>
            <?php  if($item->avgReviews->overall > 0){ ?>
            <div class="review text-center size18"><i class="icon-thumbs-up-4"></i><?php echo $item->avgReviews->overall; ?></div>
            <!--<?php echo $item->avgReviews->totalReviews; ?>-->
            <div class="clearfix"></div>
            <?php } ?>

            <?php if($appModule == "ean"){ if($item->tripAdvisorRating > 0){ ?>
            <div class="review text-center size18"><i class="icon-thumbs-up-4"></i><?php echo $item->tripAdvisorRating;?> </div>
            <div class="clearfix"></div>
            <?php } } ?>
            <a href="<?php echo $item->slug;?>">
            <button class="mt15 btn btn-action btn-block"><?php echo trans('0177');?></button>
            </a>
          </div>
          <div class="labelleft2 rtl_title_home">
            <h4 class="mtb0 RTL go-text-right">
              <a href="<?php echo $item->slug;?>"><b><?php echo character_limiter($item->title,20);?></b></a>
              <!-- Cars airport pickup -->  <?php if($appModule == "cars"){ if($item->airportPickup == "yes"){ ?> <button class="btn btn-success btn-xs"><i class="icon-paper-plane-2"></i> <?php echo trans('0207');?></button> <?php } } ?> <!-- Cars airport pickup -->
            </h4>
            <?php if($appModule != "offers"){ ?> <a class="go-right" href="javascript:void(0);" onclick="showMap('<?php echo base_url();?>home/maps/<?php echo $item->latitude; ?>/<?php echo $item->longitude; ?>/<?php echo $appModule; ?>/<?php echo $item->id;?>','modal');" title="<?php echo $item->location;?>"><i style="margin-left: -3px;" class="icon-location-6 go-right"></i><?php echo character_limiter($item->location,10);?></a> <span class="go-right"><?php echo $item->stars;?></span> <?php } ?>
            <?php if(!empty($item->avgReviews->imgUrl)){ ?> <img style="margin: 7px 0px 0px 0px;" class="img-responsive" src="<?php echo $item->avgReviews->imgUrl;?>" /> <?php } ?>
            <p style="margin: 7px 0px 7px 0px;" class="grey RTL"><?php echo character_limiter($item->desc,190);?></p>
            <?php if($appModule == "hotels"){ ?>
            <ul class="hotelpreferences go-right hidden-xs">
              <?php $cnt = 0; foreach($item->amenities as $amt){ $cnt++; if($cnt <= 10){ if(!empty($amt->name)){ ?>
              <img title="<?php echo $amt->name;?>" data-toggle="tooltip" data-placement="top" style="height:25px;" src="<?php echo $amt->icon;?>" alt="<?php echo $amt->name;?>" />
              <?php } } } ?>
            </ul>
            <?php } if($appModule == "tours"){ ?>
            <div class="add_info hidden-sm hidden-xs go-right RTL">
              <strong><?php echo trans('0222');?></strong> : <a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo character_limiter($item->tourType,5); ?>"><?php echo character_limiter($item->tourType,5); ?></a>
              &nbsp;<strong><?php echo trans('0275');?></strong> : <a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo $item->tourDays;?>"><?php echo $item->tourDays;?></a>
              &nbsp;<strong><?php echo trans('0276');?></strong> : <a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo $item->tourNights;?>"><?php echo $item->tourNights;?></a>
            </div>
            <?php } if($appModule == "cars"){ ?>
              <table class="table-bordered table-striped">
                <thead>
                  <tr>
                    <td class="text-center"><a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo trans('0446');?>"><i class="icon-user-7"></i><?php echo trans('0446');?></a></td>
                    <td class="text-center"><a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo trans('0213');?>"><i class="icon-print-3"></i><?php echo trans('0213');?></a></td>
                    <td class="text-center"><a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo trans('0201');?>"><i class="icon-params"></i><?php echo trans('0201');?></a></td>
                    <td class="text-center"><a href="javascript:void(0);" class="tooltip-1" data-placement="top" data-original-title="<?php echo trans('0199');?>"><i class="icon-tag-6"></i><?php echo trans('0199');?></a></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><?php echo $item->passengers;?></td>
                    <td class="text-center"><?php echo $item->doors;?></td>
                    <td class="text-center"><?php echo $item->transmission;?></td>
                    <td class="text-center"><?php echo $item->baggage;?></td>
                  </tr>
                </tbody>
              </table>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    </td>
</tr>

    <div class="clearfix"></div>

    <?php } ?>
    </table>
    <div class="clearfix"></div>

    <div class="offset-3 offset-RTL">
     <ul class="nav nav-pills nav-justified" role="tablist">
     <?php echo createPagination($info);?>
    </ul>
    </div>

      <?php }else{  echo '<h1 class="text-center">' . trans("066") . '</h1>'; } ?>

    <!-- End of offset1-->

  <!-- start EAN multiple locations found and load more hotels -->
  <?php if($appModule == "ean"){ if($multipleLocations > 0){ foreach($locationInfo as $loc){ ?>
    <p><?php echo $loc->link; ?></p>
   <?php } } ?>
      <!--This is for display cache Parameter-->
    <div id="latest_record_para">
      <input type="hidden" name="moreResultsAvailable" id="moreResultsAvailable" value="<?php echo $moreResultsAvailable; ?>" />
      <input type="hidden" name="cacheKey" id="cacheKey" value="<?php echo $cacheKey; ?>" />
      <input type="hidden" name="cacheLocation" id="cacheLocation" value="<?php echo $cacheLocation; ?>" />
      <input type="hidden" name="" id="agesappendurl" value="<?php echo $agesApendUrl; ?>" />
      <input type="hidden" name="" id="adultsCount" value="<?php echo $adults;?>" />
    </div>
    <!--This is for display content-->
    <div id="New_data_load"></div>
    <!--This is for display Loader Image-->
    <div id="loader_new"></div>
    <div id="message_noResult"></div>
    <!-- END OF LIST CONTENT-->
  <?php } ?>
    <!-- End EAN multiple locations found and load more hotels  -->
  </div>
  <!-- END OF LIST CONTENT-->
</div>
<!-- END OF container-->
</div>
<!-- END OF CONTENT -->
<br><br><br>
<!-- End container -->
<!-- Map -->
<!-- Map Modal -->
<div class="modal fade" id="mapModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div  class="modal-content">
    <div class="mapContent">
    </div>
  </div>
</div>
</div>
<div class="clearfix"></div>
<script>
<?php if($appModule == "cars"){ ?>
$(function(){
  $(".saveDates").on("click",function(){
    var pickup = $("#departcar").val();
    var drop = $("#returncar").val();
    var htmlvar = pickup+' - '+drop;
    $(".datesModal").html(htmlvar);
  });
})

<?php } ?>

$('#collapseMap').on('shown.bs.collapse', function(e){
(function(A) {

if (!Array.prototype.forEach)
 A.forEach = A.forEach || function(action, that) {
   for (var i = 0, l = this.length; i < l; i++)
     if (i in this)
       action.call(that, this[i], i, this);
   };

 })(Array.prototype);

 var
 mapObject,
 markers = [],
 markersData = {

   'map-red': [
    <?php foreach($module as $item): ?>
   {
     name: 'hotel name',
     location_latitude: "<?php echo $item->latitude;?>",
     location_longitude: "<?php echo $item->longitude;?>",
     map_image_url: "<?php echo $item->thumbnail;?>",
     name_point: "<?php echo $item->title;?>",
     description_point: "<?php echo character_limiter(strip_tags(trim($item->desc)),75);?>",
     url_point: "<?php echo $item->slug;?>"
   },
    <?php endforeach; ?>

   ],

 };
   var mapOptions = {
      <?php if(empty($_GET)){ ?>
     zoom: 10,
      <?php }else{ ?>
       zoom: 12,
      <?php } ?>
     center: new google.maps.LatLng(<?php echo $item->latitude;?>, <?php echo $item->longitude;?>),
     mapTypeId: google.maps.MapTypeId.ROADMAP,

     mapTypeControl: false,
     mapTypeControlOptions: {
       style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
       position: google.maps.ControlPosition.LEFT_CENTER
     },
     panControl: false,
     panControlOptions: {
       position: google.maps.ControlPosition.TOP_RIGHT
     },
     zoomControl: true,
     zoomControlOptions: {
       style: google.maps.ZoomControlStyle.LARGE,
       position: google.maps.ControlPosition.TOP_RIGHT
     },
     scrollwheel: false,
     scaleControl: false,
     scaleControlOptions: {
       position: google.maps.ControlPosition.TOP_LEFT
     },
     streetViewControl: true,
     streetViewControlOptions: {
       position: google.maps.ControlPosition.LEFT_TOP
     },
     styles: [/*map styles*/]
   };
   var
   marker;
   mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
   for (var key in markersData)
     markersData[key].forEach(function (item) {
       marker = new google.maps.Marker({
         position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
         map: mapObject,
         icon: '<?php echo base_url(); ?>assets/img/' + key + '.png',
       });

       if ('undefined' === typeof markers[key])
         markers[key] = [];
       markers[key].push(marker);
       google.maps.event.addListener(marker, 'click', (function () {
     closeInfoBox();
     getInfoBox(item).open(mapObject, this);
     mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
    }));

});

 function hideAllMarkers () {
   for (var key in markers)
     markers[key].forEach(function (marker) {
       marker.setMap(null);
     });
 };

 function closeInfoBox() {
   $('div.infoBox').remove();
 };

 function getInfoBox(item) {
   return new InfoBox({
     content:
     '<div class="marker_info" id="marker_info">' +
     '<img style="width:280px;height:140px" src="' + item.map_image_url + '" alt=""/>' +
     '<h3>'+ item.name_point +'</h3>' +
     '<span>'+ item.description_point +'</span>' +
     '<a href="'+ item.url_point + '" class="btn btn-primary"><?php echo trans('0177');?></a>' +
     '</div>',
     disableAutoPan: true,
     maxWidth: 0,
     pixelOffset: new google.maps.Size(40, -190),
     closeBoxMargin: '0px -20px 2px 2px',
     closeBoxURL: "<?php echo $theme_url; ?>assets/img/close.png",
     isHidden: false,
     pane: 'floatPane',
     enableEventPropagation: true
   }); };  });
</script>
