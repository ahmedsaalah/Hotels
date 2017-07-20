<div class="clearfix"></div>
<input type="hidden" name="moreResultsAvailable" id="moreResultsAvailable" value="<?php echo $moreResultsAvailable; ?>" />
<input type="hidden" name="cacheKey" id="cacheKey" value="<?php echo $cacheKey; ?>" />
<input type="hidden" name="cacheLocation" id="cacheLocation" value="<?php echo $cacheLocation; ?>" />
<input type="hidden" name="" id="agesappendurl" value="<?php echo $agesApendUrl; ?>" />
###
<table class="bgwhite table table-striped">
<?php if(!empty($module)){ foreach($module as $item){ ?>
   <tr>
   <td>
  <div class="offset-3 offset-RTL">
        <div class="wow fadeIn col-lg-4 col-md-4 col-sm-4 offset-0 go-right">
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
              </h4>
              <a class="go-right" href="javascript:void(0);" onclick="showMap('<?php echo base_url();?>home/maps/<?php echo $item->latitude; ?>/<?php echo $item->longitude; ?>/<?php echo $appModule; ?>/<?php echo $item->id;?>','modal');" title="<?php echo $item->location;?>"><i style="margin-left: -3px;" class="icon-location-6 go-right"></i><?php echo character_limiter($item->location,10);?></a> <span class="go-right"><?php echo $item->stars;?></span>
              <br><br>
              <p class="grey RTL"><?php echo character_limiter($item->desc,200);?></p>
              <br/>
            </div>
          </div>
        </div>
    </div>

    </td>
 </tr>
 <div class="clearfix"></div>
  <?php } } ?>
</table>