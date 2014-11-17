<?php

/**
 * SettingTranslation form.
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SettingTranslationForm extends BaseSettingTranslationForm {

    public function configure() {
        $this->setWidget('animace', new sfWidgetFormInputMediaBrowser());
    }

}
