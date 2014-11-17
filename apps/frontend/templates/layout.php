<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="cs"> 
    <head>
        <meta http-equiv="content-language" content="cs" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta name="robots" content="index, follow" /> 
        <meta name="author" content="Michal Kořínek" /> 
        <meta name="owner" content="Senzadubio s.r.o." />
        <?php if (NavigationHelper::getSetting()->getGoogleOvereni()) : ?>
            <meta name="google-site-verification" content="<?php echo NavigationHelper::getSetting()->getGoogleOvereni(); ?>" />
        <?php endif ?>
        <?php echo include_http_metas() ?>
        <?php echo include_metas() ?>
        <?php echo include_title() ?>
        <?php echo include_stylesheets() ?>
        <?php echo include_javascripts() ?>
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
        <div id="page"> 
            <!-- HEADRE -->
            <div id="header">
                <div class="jazyky">
                    <?php echo link_to('CZ', '/cs'); ?> | 
                    <?php echo link_to('EN', '/en'); ?> | 
                    <?php echo link_to('DE', '/de'); ?> | 
                    <?php echo link_to('IT', '/it'); ?>
                </div><?php
                    switch ($sf_request->getParameter('sf_culture')) {
                        case 'cs' :
                            echo link_to(' ', '@homepage_cs', array('id' => 'logo'));
                            ?>
                        <ul id="menu">
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getKlienti(), '@klienti_cs'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getSluzby(), '@sluzby_cs'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getHomepage(), '@homepage_cs'); ?></li>
                        </ul>
                        <ul id="menu2">
                            <li id="butkontakt"><?php echo link_to(NavigationHelper::getSetting()->getKontakt(), '@kontakt_cs'); ?></li>
                        </ul>
                        <?php
                        break;
                    case 'it' :
                        echo link_to(' ', '@homepage_it', array('id' => 'logo'));
                        ?>
                        <ul id="menu">
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getKlienti(), '@klienti_it'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getSluzby(), '@sluzby_it'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getHomepage(), '@homepage_it'); ?></li>
                        </ul>
                        <ul id="menu2">
                            <li id="butkontakt"><?php echo link_to(NavigationHelper::getSetting()->getKontakt(), '@kontakt_it'); ?></li>
                        </ul>
                        <?php
                        break;
                    case 'de' :
                        echo link_to(' ', '@homepage_de', array('id' => 'logo'));
                        ?>
                        <ul id="menu">
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getKlienti(), '@klienti_de'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getSluzby(), '@sluzby_de'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getHomepage(), '@homepage_de'); ?></li>
                        </ul>
                        <ul id="menu2">
                            <li id="butkontakt"><?php echo link_to(NavigationHelper::getSetting()->getKontakt(), '@kontakt_de'); ?></li>
                        </ul>
                        <?php
                        break;
                    case 'en' :
                        echo link_to(' ', '@homepage_en', array('id' => 'logo'));
                        ?>
                        <ul id="menu">
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getKlienti(), '@klienti_en'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getSluzby(), '@sluzby_en'); ?></li>
                            <li class="butostatni"><?php echo link_to(NavigationHelper::getSetting()->getHomepage(), '@homepage_en'); ?></li>
                        </ul>
                        <ul id="menu2">
                            <li id="butkontakt"><?php echo link_to(NavigationHelper::getSetting()->getKontakt(), '@kontakt_en'); ?></li>
                        </ul>
<?php } ?>
            </div>
            <!-- END HEADRE -->
            <!-- CONTENT -->
            <div id="content">
<?php echo $sf_content; ?>
            </div>
            <div class="cistic"></div>
            <!-- END CONTENT -->
            <!-- FOOTER -->
            <div id="footer">
                <?php
                switch ($sf_request->getParameter('sf_culture')) {
                    case 'cs' :
                        ?>
                        <div class="odkaz">Copyright © 2011&nbsp;-&nbsp;<?php echo link_to(NavigationHelper::getSetting()->getPartneri(), '@odkazy_cs'); ?></div>
                        <?php
                        break;
                    case 'it' :
                        ?>
                        <div class="odkaz">Copyright © 2011&nbsp;-&nbsp;<?php echo link_to(NavigationHelper::getSetting()->getPartneri(), '@odkazy_it'); ?></div>
                        <?php
                        break;
                    case 'de' :
                        ?>
                        <div class="odkaz">Copyright © 2011&nbsp;-&nbsp;<?php echo link_to(NavigationHelper::getSetting()->getPartneri(), '@odkazy_de'); ?></div>
                        <?php
                        break;
                    case 'en' :
                        ?>
                        <div class="odkaz">Copyright © 2011&nbsp;-&nbsp;<?php echo link_to(NavigationHelper::getSetting()->getPartneri(), '@odkazy_en'); ?></div>
    <?php }
?>
                <a href="#top" class="gotop"></a>
            </div>
            <!-- END FOOTER -->
        </div>
<?php if (NavigationHelper::getSetting()->getGaCode()) : ?>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', '<?php echo NavigationHelper::getSetting()->getGaCode(); ?>']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
<?php endif; ?>
    </body>
</html>
