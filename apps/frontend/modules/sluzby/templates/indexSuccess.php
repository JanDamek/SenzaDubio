<?php if ($stranka) echo '<h1>'.$stranka->getRaw('str_title').'</h1>'; ?>
<?php
$pocet = $sluzby->count();
$polovina = round($pocet / 2);
if ($pocet > 0) {
    ?>
    <div class="leva">
        <?php
        for ($i = 0; $i < $polovina; $i++) {
            include_partial('sluzby/sluzba', array('item' => $sluzby[$i], 'cf_culture' => $sf_request->getParameter('sf_culture')));
        }
        ?>
    </div>
    <div class="prava">
        <?php
        for ($i = $polovina ; $i < $pocet; $i++) {
            include_partial('sluzby/sluzba', array('item' => $sluzby[$i], 'cf_culture' => $sf_request->getParameter('sf_culture')));
        }
        ?>
        <div class="sluzba">
            <span class="stred"><?php echo NavigationHelper::getSetting()->getMnoDal();?> ...</span>
        </div>    
    </div>
    <?php
}
?>