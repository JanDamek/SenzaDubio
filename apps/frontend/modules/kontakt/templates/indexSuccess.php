<?php use_helper("jQuery"); ?>    
<?php if ($stranka) echo '<h1>'.$stranka->getRaw('str_title').'</h1>'; ?>

<div class="leva">
    <div class="contact">
        <p>                  
            <span style="color: #ce0610; font-weight: bold; font-size: 20px;"><?php echo NavigationHelper::getSetting()->getSiteName();?></span><br>
            <?php echo NavigationHelper::getSetting()->getUlice();?><br />
            <?php echo NavigationHelper::getSetting()->getMesto();?><br />
            <?php echo NavigationHelper::getSetting()->getStat();?>
        </p>
        <br><br>
        <div class="telefon"><strong><?php echo NavigationHelper::getSetting()->getTel();?></strong></div><br>
        <div class="email"><strong><a href="mailto:<?php echo NavigationHelper::getSetting()->getEmail();?>"><?php echo NavigationHelper::getSetting()->getEmail();?></a></strong></div>
    </div>
</div>


<div class="prava">
    <?php if (isset($odpoved)) { ?>
    <h3>Váš dotaz byl odeslán.</h3>
    <?php } else { ?> 
    <form action="#" method="post">
        <strong><?php echo NavigationHelper::getSetting()->getKon_Form();?></strong>
        <input name="email" type="text" class="kont" />
        <input name="predmet" type="text" class="kont" />
        <textarea name="msg_body" class="textove"></textarea>
        <input id="submit_form" type="submit" class="odeslat" value="<?php echo NavigationHelper::getSetting()->getOdeslat();?>" />
    </form>
    <?php } ?>
</div>

<script>
    jQuery(document).ready(function() {
        var hints = {
            "email": "<?php echo NavigationHelper::getSetting()->getZadejPop();?>",
            "predmet": "<?php echo NavigationHelper::getSetting()->getPoptavka();?>",
            "msg_body": "Zadejte Vaši zprávu."
        };
        
        var predmet ="<?php echo $predmet; ?>";
  
        var hideHint = function(field, text){
            if (jQuery(field).val() === text) {
                jQuery(field).val("");
                jQuery(field).removeClass('hint');
            }
        };
  
        var showHint = function(field, text){
            if (jQuery(field).val() === "") {
                jQuery(field).val(text);
                jQuery(field).addClass('hint');
            }
        };

        var text;
  
        for (fieldName in hints) {
            text = hints[fieldName];
            jQuery("input[name='"+fieldName+"']").val(text).focus((function(text) {
                return function() {hideHint(this, text);};
            })(text)).blur((function(text) {
                return function() {showHint(this, text);};
            })(text)).addClass('hint');
        }
        
        if (predmet!= "" )
          jQuery("input[name='predmet']").val(predmet)
  
    });
</script>    
