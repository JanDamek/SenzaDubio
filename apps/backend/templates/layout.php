<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <script type="text/javascript">
            sfMediaBrowserWindowManager.init('/backend.php/sf_media_browser/select');
        </script>
    </head>
    <body>
        <?php
        if ($sf_user->isAuthenticated()) :
            ?>
            <div style="width: 100%; height: 40px">
                <ul class="menu" id="menu">
                    
                    <li class="menulink">Obsah
                        <ul>
                            <li><?php echo link_to('Klienti', 'klienti/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Sluzby', 'sluzby/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Clanky', 'stranky/index', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Galerie', 'gallery/index', array('class' => 'sub')) ?></li>
                        </ul>
                    </li>
                    <li class="menulink">Nastaveni
                        <ul>
                            <li><?php echo link_to('Globani data', 'setting/edit?id=1', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Reindexace vyhledavání', '@setting-lucene-reindex', array('class' => 'sub')) ?></li>
                            <li><?php echo link_to('Vymazat CACHE', '@setting-clearcache', array('class' => 'sub')) ?></li>
                            <!--<li><?php echo link_to('Odkazy', 'odkazy/index', array('class' => 'sub')) ?></li>-->
                            <li class="menulink">Uživatelé
                                <ul>
                                    <li><?php echo link_to('Uživatelé', '@sf_guard_user', array('class' => 'sub')) ?></li>
                                    <li><?php echo link_to('Skupiny', '@sf_guard_group', array('class' => 'sub')) ?></li>
                                    <li><?php echo link_to('Práva', '@sf_guard_permission', array('class' => 'sub')) ?></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menulink"><?php echo link_to('Odhlásit', 'sfGuardAuth/signout'); ?></li>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $sf_content ?>
        <script type="text/javascript">
            var menu=new menu.dd("menu");
            menu.init("menu","menuhover");
        </script>
    </body>
</html>
