<?php

require_once dirname(__FILE__) . '/../lib/vendor/Symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration {

    static protected $zendLoaded = false;

    static public function registerZend()
    {
        if (self::$zendLoaded)
        {
            return;
        }

        set_include_path(sfConfig::get('sf_lib_dir') . '/vendor' . PATH_SEPARATOR . get_include_path());
        require_once sfConfig::get('sf_lib_dir') . '/vendor/Zend/Loader/Autoloader.php';
        Zend_Loader_Autoloader::getInstance();
        self::$zendLoaded = true;
    }

    public function setup() {
        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('eCropPlugin');
        $this->enablePlugins('sfFormExtraPlugin');
        $this->enablePlugins('sfDoctrineApplyPlugin');
        $this->enablePlugins('sfDoctrineGuardPlugin');
        $this->enablePlugins('sfImageTransformPlugin');
        $this->enablePlugins('sfJqueryReloadedPlugin');
        $this->enablePlugins('sfLightboxPlugin');
        $this->enablePlugins('sfAdminThemejRollerPlugin');
        $this->enablePlugins('sfMediaBrowserPlugin');
        
        set_include_path(sfConfig::get('sf_lib_dir') . '/vendor' . PATH_SEPARATOR . get_include_path());

        self::registerZend();
        
        }

}
