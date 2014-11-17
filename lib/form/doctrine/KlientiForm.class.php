<?php

/**
 * Klienti form.
 *
 * @package    senzadubbio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class KlientiForm extends BaseKlientiForm {

    public function configure() {
      $this->embedI18n(array('cs', 'en', 'it', 'de'));
        
        $this->setWidget('img_gray', new sfWidgetFormInputMediaBrowser());
        $this->setWidget('img_hover', new sfWidgetFormInputMediaBrowser());
    }

}
