<div class="sluzba">
    <h2><?php echo $item->getTitle();?></h2>
    <?php echo $item->getRaw('popis'); 
    
    $slug = $item->getId();
    
    if (empty ($slug)) $slug='poptavka';
    
    switch ($cf_culture) {
        case 'cs':
            echo link_to(NavigationHelper::getSetting()->getOnLinePop().' »', '@poptavka_cs?slug='.$slug, array('class' => 'poptavka')); 
            break;
        case 'it':
            echo link_to(NavigationHelper::getSetting()->getOnLinePop().' »', '@poptavka_it?slug='.$slug, array('class' => 'poptavka')); 
            break;
        case 'de':
            echo link_to(NavigationHelper::getSetting()->getOnLinePop().' »', '@poptavka_de?slug='.$slug, array('class' => 'poptavka')); 
            break;
        case 'en':
            echo link_to(NavigationHelper::getSetting()->getOnLinePop().' »', '@poptavka_en?slug='.$slug, array('class' => 'poptavka')); 
            break;
    }
   ?>
</div>