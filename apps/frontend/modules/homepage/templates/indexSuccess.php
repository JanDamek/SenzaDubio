<?php
//use_helper('jQuery');
use_helper('Lightbox');
use_helper('ImageResizer');
//use_javascript('scriptaculous-js-1.9.0/lib/prototype.js');
//use_javascript('scriptaculous-js-1.9.0/src/scriptaculous.js?load=effects,builder');
use_javascript('jquery-1.7.2.min.js');
use_javascript('lightbox.js');

if ($stranka)
    echo '<h1>' . $stranka->getRaw('str_title') . '</h1>';
?>
<?php if ($stranka->getSlug() == 'homepage') : ?>
    <div class="leva">      
    <?php endif ?>
    <?php if ($stranka) echo $stranka->getRaw('popis'); ?>
    <?php if ($stranka->getSlug() == 'homepage') : ?>
    </div>
    <div class="prava">

        <div id="slider">
            <a class="top" onclick="scrollup();false;"></a>
            <div class="slides" id="site_cont">
                <div class="fog-top"></div>
                <div class="slid_contet">
                    <div class="slid_free"></div>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
//                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($gal_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(190, 100, $value->getPath()),
                            'image' => $value->getPath2(),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    echo light_slideshow($images, $link_options);
                    ?>
    <!--                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> 
                    <div class="slid"><a href="#"><img src="/css/pic/prjekt.jpg" alt="prjekt" title="Prjekt" border="0" height="100" width="190"></a></div> -->
                    <div class="slid_free"></div>
                </div>
                <div class="fog-bottom"></div>        
            </div>
            <a class="bottom" onclick="scrolldown();false;"></a>
        </div>
        <!--        <div id="info"></div>-->
    </div>
    <?php
 endif ?>
<script type="text/javascript">
    var div=document.getElementById('site_cont');
    var h = div.scrollHeight/ 2;
    div.scrollTop =  h;
    
window.onload = function()
{
    //adding the event listerner for Mozilla
    if(window.addEventListener)
        document.addEventListener('DOMMouseScroll', moveObject, false);
 
    //for IE/OPERA etc
    document.getElementById('slider').onmousewheel = moveObject;
}    

</script>
