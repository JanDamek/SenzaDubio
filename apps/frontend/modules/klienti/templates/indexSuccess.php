<?php
use_helper('jQuery');
use_helper('ImageResizer');

foreach ($klienti as $key => $value) {
    include_partial('klienti/klient', array('item' => $value,'key'=>$key));
}
?>
<script type="text/javascript">
    $(document).ready(function(){
<?php
foreach ($klienti as $key => $value) {
?>
$("#imgg_<?php echo $key; ?>").hover(function(){$(this).fadeOut();$("#imgc_<?php echo $key; ?>").fadeIn();$("#popup_<?php echo $key; ?>").fadeIn();});    
$("#imgc_<?php echo $key; ?>").mouseout(function(){$("#popup_<?php echo $key; ?>").fadeOut("slow");$(this).fadeOut("slow");$("#imgg_<?php echo $key; ?>").fadeIn();});
<?php
};
?>
});
</script>
