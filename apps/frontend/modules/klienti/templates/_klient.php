<div class="klient_main">
    <div class="klient_img">
        <?php echo image_tag(image_resizer(200, 200, $item->getImgGray()), array('id'=>"imgg_".$key,"class"=>"image_pos")); ?>
        <?php echo image_tag(image_resizer(200, 200, $item->getImgHover()), array('id'=>"imgc_".$key,"class"=>"image_pos hide")); ?>
        <div id="popup_<?php echo $key; ?>" class="popup hide">
            <h3><?php echo $item->getTitle();?></h3><?php echo $item->getRaw('popis'); ?>
        </div>
    </div>
</div>
